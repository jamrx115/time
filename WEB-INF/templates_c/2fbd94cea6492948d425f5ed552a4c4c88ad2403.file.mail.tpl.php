<?php /* Smarty version Smarty-3.0.7, created on 2015-11-25 18:43:55
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5270432875656016baf19d5-88945879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fbd94cea6492948d425f5ed552a4c4c88ad2403' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/mail.tpl',
      1 => 1426047561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5270432875656016baf19d5-88945879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
<tr>
  <td>
    <table cellspacing="4" cellpadding="7" border="0">
    <tr>
      <td valign="top" colspan="2">
        <table>
        <tr>
          <td align='right'><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['mail']['from'];?>
 (*):</td>
          <td><?php echo @SENDER;?>
</td>
        </tr>
        <tr>
          <td align='right'><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['mail']['to'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['receiver']['control'];?>
</td>
        </tr>
        <tr>
          <td align='right'><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['mail']['cc'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['cc']['control'];?>
</td>
        </tr>
        <tr>
          <td align='right'><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['mail']['subject'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['subject']['control'];?>
</td>
        </tr>
        <tr>
          <td align='right'><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['comment'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['comment']['control'];?>
</td>
        </tr>
        <tr>
          <td></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr>
          <td colspan="2" align="center" height="70"><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['btn_send']['control'];?>
</td>
        </tr>
        </table>
      </td>
    </tr>
    </table>
  </td>
</tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['close'];?>
