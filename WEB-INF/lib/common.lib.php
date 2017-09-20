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
// | http://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

	/**
	 * @return unknown
	 * @param file unknown
	 * @param version = "" unknown
	 * @desc Loads a class
	 */
	function import( $class_name ) {
	    $libs = array(
			dirname($_SERVER["SCRIPT_FILENAME"]),
			LIBRARY_DIR
		);

	    $pos = strpos($class_name, ".");
        if (!($pos === false)) {
            $peaces = explode(".", $class_name);
            $p = "";
            for ($i=0; $i<count($peaces)-1; $i++) {
                $p = $p . "/" . $peaces[$i];
            }
			$libs = array_merge(array(LIBRARY_DIR . $p),$libs);
            $class_name = $peaces[count($peaces)-1];
        }

		$filename = $class_name . '.class.php';

		foreach($libs as $lib) {
			$inc_filename = $lib . '/' . $filename;
			if (file_exists($inc_filename)) {
					require_once($inc_filename);
					return $class_name;
			}
		}

		print '<br><b>load_class: error loading file "'.$filename.'"</b>';
		die();
	}

	// The mu_sort function is used to sort a multi-dimensional array.
	// It looks like the code example is taken from the PHP manual http://ca2.php.net/manual/en/function.sort.php
	function mu_sort($array, $key_sort) {
		$n = 0;
		if (!is_array($array) || count($array)==0)
			return array();

		$key_sorta = explode(",", $key_sort);
		$keys = array_keys($array[0]);

		for($m=0; $m < count($key_sorta); $m++) {
			$nkeys[$m] = trim($key_sorta[$m]);
		}
		$n += count($key_sorta);

		for($i=0; $i < count($keys); $i++) {
			if(!in_array($keys[$i], $key_sorta)) {
				$nkeys[$n] = $keys[$i];
				$n += "1";
			}
		}

		for($u=0;$u<count($array); $u++) {
			$arr = $array[$u];
			for($s=0; $s<count($nkeys); $s++) {
				$k = $nkeys[$s];
				$output[$u][$k] = $array[$u][$k];
			}
		}
		sort($output);
		return $output;
	}

	/**
	 * return float type
	 *
	 * @param unknown $value
	 * @return unknown
	 */
	function toFloat($value) {
		if (isset($value) && (strlen($value) > 0)) {
			$value = str_replace(",",".",$value);
			return floatval($value);
		}
		return null;
	}

	function stripslashes_deep($value) {
	    $value = is_array($value) ?
                array_map('stripslashes_deep', $value) :
                stripslashes($value);
    	return $value;
	}

	function &getConnection() {
        if (!isset($GLOBALS["_MDB2_CONNECTION"])) {

        	require_once('MDB2.php');

        	$mdb2 = MDB2::connect(DSN);
			if (is_a($mdb2, 'PEAR_Error')) {
    			die($mdb2->getMessage());
			}

			$mdb2->setOption('debug', true);
			$mdb2->setFetchMode(MDB2_FETCHMODE_ASSOC);
			
   			$GLOBALS["_MDB2_CONNECTION"] = $mdb2;
    	}
      	return $GLOBALS["_MDB2_CONNECTION"];
	}


	function closeConnection() {
		if (isset($GLOBALS["_DB_CONNECTION"])) {
			$GLOBALS["_DB_CONNECTION"]->close();
			unset($GLOBALS["_DB_CONNECTION"]);
		}
	}

function time_to_decimal($a) {
  $tmp = explode(":", $a);
  if($tmp[1]{0}=="0") $tmp[1] = $tmp[1]{1};

  $m = round($tmp[1]*100/60);

  if($m<10) $m = "0".$m;
  $time = $tmp[0].".".$m;
  return $time;
}

function sec_to_time_fmt_hm($sec)
{
  return sprintf("%d:%02d", $sec / 3600, $sec % 3600 / 60);
}

function magic_quotes_off()
{
  // if (get_magic_quotes_gpc()) { // This check is now done before calling this function.
    $_POST = array_map('stripslashes_deep', $_POST);
    $_GET = array_map('stripslashes_deep', $_GET);
    $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
  // }
}


function load_dl($needed, $required=true)
{
  if (!extension_loaded($needed))
  {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
    {
      @dl("php_{$needed}.dll");
    }
    else
    {
      @dl("{$needed}.so");
    }

    if ( $required && !extension_loaded($needed) )
    {
      die( "PHP extension '{$needed}' is required but is not loaded. Read Time Tracker Install Guide for help." );
    }
  }
}

// isTrue is a helper function to return correct false for older config.php values defined as a string 'false'.
function isTrue($val)
{
  return ($val == false || $val === 'false') ? false : true;
}

// ttValidString is used to check user input to validate a string.
function ttValidString($val, $emptyValid = false)
{
  $val = trim($val);
  if (strlen($val) == 0 && !$emptyValid)
    return false;
    
  // String must not be XSS evil (to insert JavaScript).
  if (stristr($val, '<script>') || stristr($val, '<script '))
    return false;
    
  return true;    
}

// ttValidEmail is used to check user input to validate an email string.
function ttValidEmail($val, $emptyValid = false)
{
  $val = trim($val);
  if (strlen($val) == 0)
    return ($emptyValid ? true : false);
  	
  // String must not be XSS evil (to insert JavaScript).
  if (stristr($val, '<script>') || stristr($val, '<script '))
    return false;
    
  // Validate a single email address. TODO: improve for compliancy with RFC.
  if (!preg_match("/^[_a-zA-Z\d\'-\.]+@([_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+)$/", $val))
    return false;
  
  return true;    
}

// ttValidEmailList is used to check user input to validate an email string.
function ttValidEmailList($val, $emptyValid = false)
{
  $val = trim($val);
  if (strlen($val) == 0)
    return ($emptyValid ? true : false);
  	
  // String must not be XSS evil (to insert JavaScript).
  if (stristr($val, '<script>') || stristr($val, '<script '))
    return false;
    
  // Validates a list of email addresses separated by a comma with optional spaces.
  if (!preg_match("/^[_a-zA-Z\d\'-\.]+@([_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+)(,\s*[_a-zA-Z\d\'-\.]+@([_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+))*$/", $val))
    return false;
    
  return true;
}

// ttValidFloat is used to check user input to validate a float value.
function ttValidFloat($val, $emptyValid = false)
{
  $val = trim($val);
  if (strlen($val) == 0)
    return ($emptyValid ? true : false);
    
  global $user;
  $decimal = $user->decimal_mark;
	
  if (!preg_match('/^-?[0-9'.$decimal.']+$/', $val))
    return false;
    
  return true;    
}

// ttValidDate is used to check user input to validate a date.
function ttValidDate($val)
{
  $val = trim($val);
  if (strlen($val) == 0)
    return false;

  // This should accept a string in format 'YYYY-MM-DD', 'MM/DD/YYYY', 'DD.MM.YYYY', or 'DD.MM.YYYY whatever'.
  if (!preg_match('/^\d\d\d\d-\d\d-\d\d$/', $val) &&
    !preg_match('/^\d\d\/\d\d\/\d\d\d\d$/', $val) &&
    !preg_match('/^\d\d\.\d\d\.\d\d\d\d$/', $val) &&
    !preg_match('/^\d\d\.\d\d\.\d\d\d\d .+$/', $val))
    return false;
    
  return true;    
}

// ttValidInteger is used to check user input to validate an integer.
function ttValidInteger($val, $emptyValid = false)
{
  $val = trim($val);
  if (strlen($val) == 0)
    return ($emptyValid ? true : false);
    
  if (!preg_match('/^[0-9]+$/', $val))
    return false;

  return true;
}

// ttValidCronSpec is used to check user input to validate cron specification.
function ttValidCronSpec($val)
{
  // This code is adapted from http://stackoverflow.com/questions/235504/validating-crontab-entries-w-php
  $numbers= array(
     'min'=>'[0-5]?\d',
     'hour'=>'[01]?\d|2[0-3]',
     'day'=>'0?[1-9]|[12]\d|3[01]',
     'month'=>'[1-9]|1[012]',
     'dow'=>'[0-7]'
  );

  foreach($numbers as $field=>$number) {
    $range= "($number)(-($number)(\/\d+)?)?";
    $field_re[$field]= "\*(\/\d+)?|$range(,$range)*";
  }

  $field_re['month'].='|jan|feb|mar|apr|may|jun|jul|aug|sep|oct|nov|dec';
  $field_re['dow'].='|mon|tue|wed|thu|fri|sat|sun';

  $fields_re= '('.join(')\s+(', $field_re).')';

  /*
  $replacements= '@reboot|@yearly|@annually|@monthly|@weekly|@daily|@midnight|@hourly';

  $regexp = '^\s*('.
                '$'.
                '|#'.
                '|\w+\s*='.
                "|$fields_re\s+\S".
                "|($replacements)\s+\S".
            ')';
   */
  // The above block from the link did not work for me.

  // But this works.
  $regexp = '/^'.$fields_re.'$/';
	
  if (!preg_match($regexp, $val))
    return false;

  return true;
}

// ttAccessCheck is used to check whether user is allowed to proceed. This function is used
// as an initial check on all publicly available pages.
function ttAccessCheck($required_rights)
{
  global $auth;
  global $user;
  
  // Redirect to login page if user is not authenticated.
  if (!$auth->isAuthenticated()) {
    header('Location: login.php');
    exit();
  }
  
  // Check rights.
  if (!($required_rights & $user->rights))
    return false;
    
  return true;
}







	
?>