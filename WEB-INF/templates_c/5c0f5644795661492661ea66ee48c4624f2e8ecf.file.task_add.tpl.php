<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:32:09
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/task_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23021193550a3529e551d5-69859177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c0f5644795661492661ea66ee48c4624f2e8ecf' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/task_add.tpl',
      1 => 1426047567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23021193550a3529e551d5-69859177',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['taskForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['taskForm']['name']['control'];?>
</td>
        </tr>
        <tr>
          <td align = "right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['description'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['taskForm']['description']['control'];?>
</td>
        </tr>
        <tr valign="top">
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['projects'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['taskForm']['projects']['control'];?>
</td>
        </tr>
        <tr>
          <td></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['taskForm']['btn_submit']['control'];?>
</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['taskForm']['close'];?>
