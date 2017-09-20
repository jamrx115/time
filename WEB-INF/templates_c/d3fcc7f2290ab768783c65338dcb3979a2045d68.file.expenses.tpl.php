<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:31:47
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/expenses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:405368153550a35134ccb88-78713571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3fcc7f2290ab768783c65338dcb3979a2045d68' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/expenses.tpl',
      1 => 1426047557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '405368153550a35134ccb88-78713571',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/alltic/public_html/time/WEB-INF/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_cycle')) include '/home/alltic/public_html/time/WEB-INF/lib/smarty/plugins/function.cycle.php';
?><script>
// We need a few arrays to populate project dropdown.
// When client selection changes, the project dropdown must be re-populated with only relevant projects.
// Format:
// project_ids[143] = "325,370,390,400";  // Comma-separated list of project ids for client.
// project_names[325] = "Time Tracker";   // Project name.

// Prepare an array of project ids for clients.
project_ids = new Array();
<?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('client_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
?>
  project_ids[<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
] = "<?php echo $_smarty_tpl->tpl_vars['client']->value['projects'];?>
";
<?php }} ?>
// Prepare an array of project names.
project_names = new Array();
<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
  project_names[<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
] = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['name'],'javascript');?>
";
<?php }} ?>
// We'll use this array to populate project dropdown when client is not selected.
var idx = 0;
projects = new Array();
<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
  projects[idx] = new Array("<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
", "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['name'],'javascript');?>
");
  idx++;
<?php }} ?>

// Mandatory top option for project dropdown.
empty_label_project = '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('i18n')->value['dropdown']['select'],'javascript');?>
';

// The fillProjectDropdown function populates the project combo box with
// projects associated with a selected client (client id is passed here as id).    
function fillProjectDropdown(id) {
  var str_ids = project_ids[id];
  var dropdown = document.getElementById("project");
  // Determine previously selected item.
  var selected_item = dropdown.options[dropdown.selectedIndex].value;

  // Remove existing content.
  dropdown.length = 0;
  // Add mandatory top option.
  dropdown.options[0] = new Option(empty_label_project, '', true);

  // Populate project dropdown.
  if (!id) {
    // If we are here, client is not selected.
	var len = projects.length;
    for (var i = 0; i < len; i++) {
      dropdown.options[i+1] = new Option(projects[i][1], projects[i][0]);
      if (dropdown.options[i+1].value == selected_item)
        dropdown.options[i+1].selected = true;
    }
  } else if (str_ids) {
    var ids = new Array();
    ids = str_ids.split(",");
    var len = ids.length;

    for (var i = 0; i < len; i++) {
      var p_id = ids[i];
      dropdown.options[i+1] = new Option(project_names[p_id], p_id);
      if (dropdown.options[i+1].value == selected_item)
        dropdown.options[i+1].selected = true;
    }
  }
}

function get_date() {
  var date = new Date();
  return date.strftime("%Y-%m-%d");
}
</script>

<?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['open'];?>

<table cellspacing="4" cellpadding="0" border="0">
  <tr>
    <td valign="top">
      <table>
<?php if ($_smarty_tpl->getVariable('on_behalf_control')->value){?>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['user'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['onBehalfUser']['control'];?>
</td>
        </tr>
<?php }?>
<?php if (in_array('cl',explode(',',$_smarty_tpl->getVariable('user')->value->plugins))){?>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['client'];?>
<?php if (in_array('cm',explode(',',$_smarty_tpl->getVariable('user')->value->plugins))){?> (*)<?php }?>:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['client']['control'];?>
</td>
        </tr>
<?php }?>
<?php if ((@MODE_PROJECTS==$_smarty_tpl->getVariable('user')->value->tracking_mode||@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['project'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['project']['control'];?>
</td>
        </tr>
<?php }?>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['item'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['item_name']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['cost'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['cost']['control'];?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->currency,'html');?>
</td>
        </tr>
      </table>
    </td>
    <td valign="top">
      <table>
        <tr><td><?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['date']['control'];?>
</td></tr>
      </table>
    </td>
  </tr>
</table>

<table>
  <tr>
    <td align="center" colspan="2"><?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['btn_submit']['control'];?>
</td>
  </tr>
</table>

<table width="720">
<tr>
  <td valign="top">
    <?php if ($_smarty_tpl->getVariable('expense_items')->value){?>
      <table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
<?php if (in_array('cl',explode(',',$_smarty_tpl->getVariable('user')->value->plugins))){?>
        <td width="20%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['client'];?>
</td>
<?php }?>
<?php if ((@MODE_PROJECTS==$_smarty_tpl->getVariable('user')->value->tracking_mode||@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
        <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['project'];?>
</td>
<?php }?>
        <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['item'];?>
</td>
        <td width="5%" class="tableHeaderCentered"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['cost'];?>
</td>
        <td width="5%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('expense_items')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
      <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#f5f5f5,#ccccce"),$_smarty_tpl);?>
">
<?php if (in_array('cl',explode(',',$_smarty_tpl->getVariable('user')->value->plugins))){?>
        <td valign='top'><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['client'],'html');?>
</td>
<?php }?>
<?php if ((@MODE_PROJECTS==$_smarty_tpl->getVariable('user')->value->tracking_mode||@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
        <td valign='top'><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['project'],'html');?>
</td>
<?php }?>
        <td valign='top'><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['item'],'html');?>
</td>
        <td valign='top' align='right'><?php echo $_smarty_tpl->tpl_vars['item']->value['cost'];?>
</td>
        <td valign='top' align='center'>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['invoice_id']){?>
          &nbsp;
        <?php }else{ ?>
          <a href='expense_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</a>
        <?php }?>
        </td>
      </tr>
      <?php }} ?>
	  </table>
	  <?php if ($_smarty_tpl->getVariable('expense_items')->value){?>
      <table border="0" cellpadding="3" cellspacing="1" width="100%">
        <tr>
          <td nowrap align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['day_total'];?>
: <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->currency,'html');?>
 <?php echo $_smarty_tpl->getVariable('day_total')->value;?>
</td>
        </tr>
      </table>
      <?php }?>
	  
    <?php }?>
  </td>
</tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['expensesForm']['close'];?>



