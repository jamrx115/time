<?php /* Smarty version Smarty-3.0.7, created on 2015-10-24 16:57:35
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/cf_dropdown_option_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1648016188562bb87fbfb2e4-62174356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f357226d46dfd00b609f3e140d669d98c79530d8' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/cf_dropdown_option_add.tpl',
      1 => 1426047554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648016188562bb87fbfb2e4-62174356',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['optionAddForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <?php if ($_smarty_tpl->getVariable('user')->value->canManageTeam()){?>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['optionAddForm']['name']['control'];?>
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
           <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['optionAddForm']['btn_add']['control'];?>
</td>
        </tr>
      </table>
      <?php }?>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['optionAddForm']['close'];?>
