<?php /* Smarty version Smarty-3.0.7, created on 2015-10-15 18:34:56
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/password_change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1685646279561ff1d075ce51-82965809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a9009056202d2c3b1c67445339cf66da6b26b8' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/password_change.tpl',
      1 => 1426047563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1685646279561ff1d075ce51-82965809',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['newPasswordForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <?php if ($_smarty_tpl->getVariable('result_message')->value){?>
      <table cellspacing="4" cellpadding="7" border="0" width="100%">
        <tr><td align="center"><font color="red"><b><?php echo $_smarty_tpl->getVariable('result_message')->value;?>
</b></font></td></tr>
      </table>
	  <?php }else{ ?>
      <table>
        <tr>
          <td colspan="4" height="40"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['change_password']['tip'];?>
</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['password'];?>
 (*):</td>
          <td colspan="3"><?php echo $_smarty_tpl->getVariable('forms')->value['newPasswordForm']['password1']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['confirm_password'];?>
 (*):</td>
          <td colspan="3"><?php echo $_smarty_tpl->getVariable('forms')->value['newPasswordForm']['password2']['control'];?>
</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3" align="center"><?php echo $_smarty_tpl->getVariable('forms')->value['newPasswordForm']['btn_save']['control'];?>
</td>
        </tr>
      </table>
      <?php }?>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['newPasswordForm']['close'];?>
