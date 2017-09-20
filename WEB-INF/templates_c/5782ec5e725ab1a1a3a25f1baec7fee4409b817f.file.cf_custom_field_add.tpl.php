<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:28:05
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/cf_custom_field_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174785143550a34354c87d9-51367882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5782ec5e725ab1a1a3a25f1baec7fee4409b817f' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/cf_custom_field_add.tpl',
      1 => 1426047552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174785143550a34354c87d9-51367882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['fieldForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <?php if ($_smarty_tpl->getVariable('user')->value->canManageTeam()){?>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['fieldForm']['name']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['type'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['fieldForm']['type']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['fieldForm']['required']['control'];?>
</td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['fieldForm']['btn_add']['control'];?>
</td>
        </tr>
      </table>
    <?php }?>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['fieldForm']['close'];?>
