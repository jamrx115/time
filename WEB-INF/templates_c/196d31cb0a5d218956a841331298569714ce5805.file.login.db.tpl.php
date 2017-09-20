<?php /* Smarty version Smarty-3.0.7, created on 2015-08-01 21:47:56
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/mobile/login.db.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12298610255bd3e8c9e55a4-97402943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196d31cb0a5d218956a841331298569714ce5805' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/mobile/login.db.tpl',
      1 => 1426047600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12298610255bd3e8c9e55a4-97402943',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table border="0">
  <tr><td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['login'];?>
:</td></tr>
  <tr><td><?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['login']['control'];?>
</td></tr>
  <tr><td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['password'];?>
:</td></tr>
  <tr><td><?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['password']['control'];?>
</td></tr>
  <tr><td align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['btn_login']['control'];?>
</td></tr>
</table>