<?php /* Smarty version Smarty-3.0.7, created on 2015-04-22 18:56:32
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/client_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8063607685537eee01d9290-12465570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090e80d18c4826e17b1b5a3ccd8a90eacff64fb5' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/client_edit.tpl',
      1 => 1426047555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8063607685537eee01d9290-12465570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['client_name'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['name']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['client_address'];?>
:</td>
	      <td><?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['address']['control'];?>
</td>
	    </tr>
	    <tr>
	      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['tax'];?>
, %:</td>
	      <td><?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['tax']['control'];?>
&nbsp;(0<?php echo $_smarty_tpl->getVariable('user')->value->decimal_mark;?>
00)</td>
	    </tr>
	    <tr>
          <td align = "right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['status'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['status']['control'];?>
</td>
        </tr>
        <tr>
          <td height="40"></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
<?php if ((@MODE_PROJECTS==$_smarty_tpl->getVariable('user')->value->tracking_mode||@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['projects'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['projects']['control'];?>
</td>
        </tr>
<?php }?>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['btn_save']['control'];?>
 <?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['btn_copy']['control'];?>
</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['close'];?>
