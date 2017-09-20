<?php /* Smarty version Smarty-3.0.7, created on 2017-07-14 14:47:24
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/mobile/time_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20974406395968d97cc8f5e6-83891072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3012af193c816b16d7fb06abccc026cb39cd459d' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/mobile/time_delete.tpl',
      1 => 1426047601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20974406395968d97cc8f5e6-83891072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/alltic/public_html/time/WEB-INF/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/home/alltic/public_html/time/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
<tr>
  <td>
  <table border='0' cellpadding='3' cellspacing='1' width="100%">
  <tr>
<?php if ((@MODE_PROJECTS==$_smarty_tpl->getVariable('user')->value->tracking_mode||@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
    <td class="tableHeader" align="center"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['project'];?>
</td>
<?php }?>
    <td class="tableHeader" align="center"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['duration'];?>
</td>
	<td class="tableHeader" align="center"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['note'];?>
</td>
  </tr>
  <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#f5f5f5,#ccccce"),$_smarty_tpl);?>
">
<?php if ((@MODE_PROJECTS==$_smarty_tpl->getVariable('user')->value->tracking_mode||@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
    <td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('time_rec')->value['project_name'],'html');?>
</td>
<?php }?>
    <td align="right"><?php if ($_smarty_tpl->getVariable('time_rec')->value['duration']!='0:00'){?><?php echo $_smarty_tpl->getVariable('time_rec')->value['duration'];?>
<?php }else{ ?><font color="#ff0000"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['time']['uncompleted'];?>
</font><?php }?></td>
    <td><?php if ($_smarty_tpl->getVariable('time_rec')->value['comment']){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('time_rec')->value['comment'],'html');?>
<?php }else{ ?>&nbsp;<?php }?></td>
  </tr>
  </table>
  <table width="100%">
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['delete_button']['control'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['cancel_button']['control'];?>
</td>
  </tr>
  </table>
  </td>
</tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['close'];?>
