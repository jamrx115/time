<?php /* Smarty version Smarty-3.0.7, created on 2015-10-24 18:58:25
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/invoices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1289576260562bd4d161c5e6-56319076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d9b0d70a7aaa0612d7bf988e85a0632890c693' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/invoices.tpl',
      1 => 1426047560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1289576260562bd4d161c5e6-56319076',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/alltic/public_html/time/WEB-INF/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/home/alltic/public_html/time/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><script>
  function chLocation(newLocation) { document.location = newLocation; }
</script>

<table cellspacing="0" cellpadding="7" border="0" width="720">
  <tr>
    <td valign="top">
<?php if ($_smarty_tpl->getVariable('user')->value->canManageTeam()||$_smarty_tpl->getVariable('user')->value->isClient()){?>
      <table cellspacing="1" cellpadding="3" border="0" width="100%">
        <tr>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['invoice'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['client'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['date'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['view'];?>
</td>
  <?php if (!$_smarty_tpl->getVariable('user')->value->isClient()){?>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</td>
  <?php }?>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['invoice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('invoices')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->key => $_smarty_tpl->tpl_vars['invoice']->value){
?>
        <tr valign="top" bgcolor="<?php echo smarty_function_cycle(array('values'=>"#f5f5f5,#dedee5"),$_smarty_tpl);?>
">
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['invoice']->value['name'],'html');?>
</td>
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['invoice']->value['client_name'],'html');?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['invoice']->value['date'];?>
</td>
          <td><a href="invoice_view.php?id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['view'];?>
</a></td>
  <?php if (!$_smarty_tpl->getVariable('user')->value->isClient()){?>
          <td><a href="invoice_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</a></td>
  <?php }?>
        </tr>
        <?php }} ?>
      </table>
  
  <?php if (!$_smarty_tpl->getVariable('user')->value->isClient()){?>
      <table width="100%">
        <tr><td align="center"><br><form><input type="button" onclick="chLocation('invoice_add.php');" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['add_invoice'];?>
"></form></td></tr>
      </table>
  <?php }?>
<?php }?>
    </td>
  </tr>
</table>
