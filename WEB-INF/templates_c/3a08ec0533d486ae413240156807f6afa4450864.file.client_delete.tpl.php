<?php /* Smarty version Smarty-3.0.7, created on 2015-12-22 16:17:39
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/client_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1592061874567977a34bb442-66020111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a08ec0533d486ae413240156807f6afa4450864' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/client_delete.tpl',
      1 => 1426047555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1592061874567977a34bb442-66020111',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/alltic/public_html/time/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><?php echo $_smarty_tpl->getVariable('forms')->value['clientDeleteForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td colspan="2" align="center"><b><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('client_to_delete')->value,'html');?>
</b></td>
        </tr>
        <tr>
          <td colspan="2" align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('forms')->value['clientDeleteForm']['btn_delete']['control'];?>
&nbsp;</td>
          <td align="left">&nbsp;<?php echo $_smarty_tpl->getVariable('forms')->value['clientDeleteForm']['btn_cancel']['control'];?>
</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['clientDeleteForm']['close'];?>
