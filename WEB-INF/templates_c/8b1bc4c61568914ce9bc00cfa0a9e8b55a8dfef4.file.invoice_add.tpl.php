<?php /* Smarty version Smarty-3.0.7, created on 2015-10-24 18:58:36
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/invoice_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165446446562bd4dc1ae103-46140662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1bc4c61568914ce9bc00cfa0a9e8b55a8dfef4' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/invoice_add.tpl',
      1 => 1426047559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165446446562bd4dc1ae103-46140662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['invoice']['number'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['number']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['date'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['date']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['client'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['client']['control'];?>
</td>
        </tr>
<?php if ((@MODE_PROJECTS==$_smarty_tpl->getVariable('user')->value->tracking_mode||@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>        
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['project'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['project']['control'];?>
</td>
        </tr>
<?php }?>        
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['start_date'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['start']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['end_date'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['finish']['control'];?>
</td>
        </tr>
        <tr>
          <td height="40"></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['btn_submit']['control'];?>
</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['invoiceForm']['close'];?>


<script>
// Set the date field to browser today in user date format.
var dateField = document.getElementById("date");
if (dateField && !dateField.value) {
  var today = new Date();
  dateField.value = today.strftime("<?php echo $_smarty_tpl->getVariable('user')->value->date_format;?>
");
}
</script> 