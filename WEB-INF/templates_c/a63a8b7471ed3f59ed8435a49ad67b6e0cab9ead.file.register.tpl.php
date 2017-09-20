<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:02:08
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:424530951550a2e20bcf814-92050946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a63a8b7471ed3f59ed8435a49ad67b6e0cab9ead' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/register.tpl',
      1 => 1426047565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '424530951550a2e20bcf814-92050946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['team_name'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['team_name']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['currency'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['currency']['control'];?>
</td>
        </tr>            
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['manager_name'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['manager_name']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['manager_login'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['manager_login']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['password'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['password1']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['confirm_password'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['password2']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['email'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['manager_email']['control'];?>
</td>
        </tr>
        <tr>
          <td></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
          <td colspan="2" height="50" align="center"><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['btn_submit']['control'];?>
</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['close'];?>
