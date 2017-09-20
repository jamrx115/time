<?php /* Smarty version Smarty-3.0.7, created on 2015-10-24 16:58:28
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/cf_dropdown_option_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2019924051562bb8b4b94492-02694870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586c8f41f6252608b486c7dc9318dfd3fb793594' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/cf_dropdown_option_edit.tpl',
      1 => 1426047554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2019924051562bb8b4b94492-02694870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['optionEditForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <?php if ($_smarty_tpl->getVariable('user')->value->canManageTeam()){?>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['optionEditForm']['name']['control'];?>
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
         <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['optionEditForm']['btn_save']['control'];?>
</td>
        </tr>
      </table>
      <?php }?>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['optionEditForm']['close'];?>
