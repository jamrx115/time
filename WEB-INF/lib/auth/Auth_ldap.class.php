<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (http://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | http://www.anuko.com/content/time_tracker/open_source/credits.htm
// +----------------------------------------------------------------------+

// NOTES:
//
// Auth_ldap.class.php was originally written for LDAP authentication with Windows Active Directory.
// It June 2011, it was extended to include support for OpenLDAP. The difference in the code is in the format
// of user identification that we pass to ldap_bind().
//
// Windows AD accepts username@domain.com while OpenLDAP needs something like "uid=username,ou=people,dc=domain,dc=com".
// Therefore, some branching in the code.
//
// In April 2012, a previously mandatory search for group membership was put in a conditional block (if ($member_of) -
// when mandatory membership in groups is actually defined in config.php).
// This made the module work with Sun Directory Server when NO GROUP MEMBERSHIP is specified.
// Note 1: search is likely to fail with Sun DS if 'member_of' => array()); is used in config.php.
// Note 2: search is likely to not work properly with OpenLDAP as well because of Windows specific filtering code in there
// (we are looking for matches for Windows-specific samaccountname property). Search needs to be redone during the next
// refactoring effort.


/**
* Auth_ldap class to authenticate users against an LDAP server (Windows AD, OpenLDAP, and others).
* @package TimeTracker
*/
class Auth_ldap extends Auth {
  var $params;

  function Auth_ldap($params)
  {
    $this->params = $params;
    if (isset($GLOBALS['smarty'])) {
      $GLOBALS['smarty']->assign('Auth_ldap_params', $this->params);
    }
  }

  function ldap_escape($str){
    $illegal = array("(", ")", "#");
    $legal = array();
    foreach ($illegal as $id => $char) {
      $legal[$id] = "\\".$char;
    }
    $str = str_replace($illegal, $legal,$str); //replace them
    return $str;
  }

  /**
   * Authenticate user against LDAP server.
   *
   * @param string $login
   * @param string $password
   * @return mixed
   */
  function authenticate($login, $password)
  {
    if (!function_exists('ldap_bind')) {
      die ('php_ldap extension not loaded!');
    }

    if (empty($this->params['server']) || empty($this->params['base_dn'])) {
      die('You must set server and base_dn in AUTH_MODULE_PARAMS in config.php');
    }

    $member_of = @$this->params['member_of'];

    $lc = ldap_connect($this->params['server']);

    if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
      echo '<br />';
      echo '$lc='; var_dump($lc); echo '<br />';
      echo 'ldap_error()='; echo ldap_error($lc); echo '<br />';
    }

    if (!$lc) return false;
    
    ldap_set_option($lc, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($lc, LDAP_OPT_REFERRALS, 0);
    if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
      ldap_set_option($lc, LDAP_OPT_DEBUG_LEVEL, 7);
    }
    
    // We need to handle Windows AD and OpenLDAP differently.
    if ($this->params['type'] != 'openldap') {
      
      // check if the user specified full login
      if (strpos($login, '@') === false) {
        // append default domain
        $login .= '@' . $this->params['default_domain'];
      }


      if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
        echo '$login='; var_dump($login); echo '<br />';
      }

      $lb = @ldap_bind($lc, $login, $password);
    
      if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
        echo '$lb='; var_dump($lb); echo '<br />';
        echo 'ldap_error()='; echo ldap_error($lc); echo '<br />';
      }

      if (!$lb) {
        ldap_unbind($lc);
        return false;
      }

	  if ($member_of) {
        // get groups

        $filter = 'samaccountname='.Auth_ldap::ldap_escape($login);
        $fields = array('samaccountname', 'mail', 'memberof', 'department', 'displayname', 'telephonenumber', 'primarygroupid');
        $sr = @ldap_search($lc, $this->params['base_dn'], $filter, $fields);

        if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
          echo '$sr='; var_dump($sr); echo '<br />';
          echo 'ldap_error()='; echo ldap_error($lc); echo '<br />';
        }

        // if search failed it's likely that account is disabled
        if (!$sr) {
          ldap_unbind($lc);
          return false;
        }

        $entries = @ldap_get_entries($lc, $sr);

        if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
          echo '$entries='; var_dump($entries); echo '<br />';
          echo 'ldap_error()='; echo ldap_error($lc); echo '<br />';
        }

        if ($entries === false) {
          ldap_unbind($lc);
          return false;
        }

        $groups = array();

        // extract group names from
        // assuming the groups are in format: CN=<group_name>,...
        for ($i = 0; $i < @$entries[0]['memberof']['count']; $i++) {
          $grp = $entries[0]['memberof'][$i];
          $grp_fields = explode(',', $grp);
          $groups[] = substr($grp_fields[0], 3);
        }

        if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
          echo '$member_of'; var_dump($member_of); echo '<br />';
        };

        // check for group membership
            foreach ($member_of as $check_grp) {
          if (!in_array($check_grp, $groups)) {
            ldap_unbind($lc);
            return false;
          }
        }
      }

      ldap_unbind($lc);

      // handle special case - admin account, strip domain part
      if (strpos($login, 'admin@') !== false) {
        $login = substr($login, 0, 5);
      }

      return array('login' => $login, 'data' => $entries, 'member_of' => $groups);
    } else {
    	
      // Assuming OpenLDAP server.
      $login_oldap = 'uid='.$login.','.$this->params['base_dn'];

      if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
        echo '$login_oldap='; var_dump($login_oldap); echo '<br />';
      }
      
      // check if the user specified full login
      if (strpos($login, '@') === false) {
        // append default domain
        $login .= '@' . $this->params['default_domain'];
      }

      $lb = @ldap_bind($lc, $login_oldap, $password);
    
      if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
        echo '$lb='; var_dump($lb); echo '<br />';
        echo 'ldap_error()='; echo ldap_error($lc); echo '<br />';
      }

      if (!$lb) {
        ldap_unbind($lc);
        return false;
      }

	  if ($member_of) {
        // get groups

        $filter = 'samaccountname='.Auth_ldap::ldap_escape($login_oldap);
        $fields = array('samaccountname', 'mail', 'memberof', 'department', 'displayname', 'telephonenumber', 'primarygroupid');
        $sr = @ldap_search($lc, $this->params['base_dn'], $filter, $fields);

        if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
          echo '$sr='; var_dump($sr); echo '<br />';
          echo 'ldap_error()='; echo ldap_error($lc); echo '<br />';
        }

        // if search failed it's likely that account is disabled
        if (!$sr) {
          ldap_unbind($lc);
          return false;
        }

        $entries = @ldap_get_entries($lc, $sr);

        if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
          echo '$entries='; var_dump($entries); echo '<br />';
          echo 'ldap_error()='; echo ldap_error($lc); echo '<br />';
        }

        if ($entries === false) {
          ldap_unbind($lc);
          return false;
        }

        $groups = array();

        // extract group names from
        // assuming the groups are in format: CN=<group_name>,...
        for ($i = 0; $i < @$entries[0]['memberof']['count']; $i++) {
          $grp = $entries[0]['memberof'][$i];
          $grp_fields = explode(',', $grp);
          $groups[] = substr($grp_fields[0], 3);
        }

        if (defined('AUTH_DEBUG') && isTrue(AUTH_DEBUG)) {
          echo '$member_of'; var_dump($member_of); echo '<br />';
        };

        // check for group membership
        foreach ($member_of as $check_grp) {
          if (!in_array($check_grp, $groups)) {
            ldap_unbind($lc);
            return false;
          }
        }
      }

      ldap_unbind($lc);

      // handle special case - admin account, strip domain part
      if (strpos($login, 'admin@') !== false) {
        $login = substr($login, 0, 5);
      }

      return array('login' => $login, 'data' => $entries, 'member_of' => $groups);
    }
  }

  function isPasswordExternal() {
    return true;
  }
}