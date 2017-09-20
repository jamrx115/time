<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:01:35
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/login.db.tpl" */ ?>
<?php /*%%SmartyHeaderCode:351891698550a2dff610719-18827373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd942efb8d1ff44b8c431835329bc62916d07e5a5' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/login.db.tpl',
      1 => 1426047560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '351891698550a2dff610719-18827373',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table border="0">
  <tr>
    <td<?php if (!$_smarty_tpl->getVariable('i18n')->value['language']['rtl']){?> align="right"<?php }?>><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['login'];?>
:</td>
    <td><?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['login']['control'];?>
</td>
  </tr>
  <tr>
    <td<?php if (!$_smarty_tpl->getVariable('i18n')->value['language']['rtl']){?> align="right"<?php }?>><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['password'];?>
:</td>
    <td><?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['password']['control'];?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href ='password_reset.php'><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['login']['forgot_password'];?>
</a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['btn_login']['control'];?>
</td>
  </tr>
</table>