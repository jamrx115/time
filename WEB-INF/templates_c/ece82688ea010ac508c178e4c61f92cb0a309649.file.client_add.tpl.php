<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:30:00
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/client_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352720898550a34a834b860-24844949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece82688ea010ac508c178e4c61f92cb0a309649' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/client_add.tpl',
      1 => 1426047555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352720898550a34a834b860-24844949',
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
          <td height="40"></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['projects'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['projects']['control'];?>
</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['btn_submit']['control'];?>
</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['clientForm']['close'];?>
