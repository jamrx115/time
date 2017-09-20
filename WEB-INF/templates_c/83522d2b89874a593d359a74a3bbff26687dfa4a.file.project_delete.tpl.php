<?php /* Smarty version Smarty-3.0.7, created on 2015-08-01 22:55:32
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/project_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65828768855bd4e64b36025-98575203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83522d2b89874a593d359a74a3bbff26687dfa4a' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/project_delete.tpl',
      1 => 1426047565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65828768855bd4e64b36025-98575203',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/alltic/public_html/time/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><?php echo $_smarty_tpl->getVariable('forms')->value['projectDeleteForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td colspan="2" align="center"><b><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('project_to_delete')->value,'html');?>
</b></td>
        </tr>
        <tr><td colspan="2" align="center">&nbsp;</td></tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('forms')->value['projectDeleteForm']['btn_delete']['control'];?>
&nbsp;</td>
          <td align="left">&nbsp;<?php echo $_smarty_tpl->getVariable('forms')->value['projectDeleteForm']['btn_cancel']['control'];?>
</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['projectDeleteForm']['close'];?>
