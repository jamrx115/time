<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:27:29
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/profile_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:680310290550a341118f132-25852451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0856ca22fa529ce4d0a557f2a0384e9bb96a7183' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/profile_edit.tpl',
      1 => 1426047564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '680310290550a341118f132-25852451',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script>
// handleControls - controls visibility of controls.
function handlePluginCheckboxes() {
  var clientsCheckbox = document.getElementById("clients");
  var invoicesCheckbox = document.getElementById("invoices");
  var requiredCheckbox = document.getElementById("client_required");
  var requiredLabel = document.getElementById("required_label");
  if (clientsCheckbox.checked) {
    requiredCheckbox.style.visibility = "visible";
	requiredLabel.style.visibility = "visible";
	invoicesCheckbox.disabled = false;
  } else {
	requiredCheckbox.checked = false;
	requiredCheckbox.style.visibility = "hidden";
	requiredLabel.style.visibility = "hidden";
	invoicesCheckbox.checked = false;
    invoicesCheckbox.disabled = true;
  } 

  var expensesCheckbox = document.getElementById("expenses");
  var taxCheckbox = document.getElementById("tax_expenses");
  var taxLabel = document.getElementById("tax_label");
  if (expensesCheckbox.checked) {
    taxCheckbox.style.visibility = "visible";
    taxLabel.style.visibility = "visible";
  } else {
	taxCheckbox.checked = false;
    taxCheckbox.style.visibility = "hidden";
    taxLabel.style.visibility = "hidden";
  }

  var customFieldsCheckbox = document.getElementById("custom_fields");
  var configureLabel = document.getElementById("cf_config");
  if (customFieldsCheckbox.checked) {
    configureLabel.style.visibility = "visible";
  } else {
    configureLabel.style.visibility = "hidden";
  }

  var notificationsCheckbox = document.getElementById("notifications");
  configureLabel = document.getElementById("notifications_config");
  if (notificationsCheckbox.checked) {
    configureLabel.style.visibility = "visible";
  } else {
    configureLabel.style.visibility = "hidden";
  }
}
</script>

<?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['open'];?>


<?php if ($_smarty_tpl->getVariable('user')->value->canManageTeam()){?>
<?php $_template = new Smarty_Internal_Template("datetime_format_preview.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>

<table cellspacing="4" cellpadding="7" border="0">
    <tr>
      <td>
        <table cellspacing="1" cellpadding="2" border="0">
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['person_name'];?>
 (*):</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['name']['control'];?>
</td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['login'];?>
 (*):</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['login']['control'];?>
</td>
          </tr>

<?php if (!$_smarty_tpl->getVariable('auth_external')->value){?>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['password'];?>
 (*):</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['password1']['control'];?>
</td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['confirm_password'];?>
 (*):</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['password2']['control'];?>
</td>
          </tr>
<?php }?>

          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['email'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['email']['control'];?>
</td>
          </tr>
          <tr>
            <td></td>
            <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
          </tr>

<?php if ($_smarty_tpl->getVariable('user')->value->canManageTeam()){?>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['team_name'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['team_name']['control'];?>
</td>
          </tr>
          <!-- <tr>
            <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['address'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['address']['control'];?>
</td>
          </tr> -->
          <tr>
            <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['currency'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['currency']['control'];?>
</td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['lock_interval'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['lock_interval']['control'];?>
</td>
          </tr>
          <tr>
           <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['language'];?>
:</td>
           <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['lang']['control'];?>
</td>
          </tr>
          <tr>
            <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['decimal_mark'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['decimal_mark']['control'];?>
 <font id="decimal_preview" color="#777777">&nbsp;</font></td>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['date_format'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['format_date']['control'];?>
 <font id="date_format_preview" color="#777777">&nbsp;</font></td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['time_format'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['format_time']['control'];?>
 <font id="time_format_preview" color="#777777">&nbsp;</font></td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['week_start'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['start_week']['control'];?>
</td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['profile']['tracking_mode'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['tracking_mode']['control'];?>
</td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['profile']['record_type'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['record_type']['control'];?>
</td>
          </tr>
          <script>
            MakeFormatPreview("date_format_preview", document.getElementById("format_date"));
            MakeFormatPreview("time_format_preview", document.getElementById("format_time"));
            
            function adjustDecimalPreview()
            {
              var mark = document.getElementById("decimal_mark").value;
              var example = document.getElementById("decimal_preview");
              example.innerHTML = "<i>3"+mark+"14</i>";
            }
            adjustDecimalPreview();
          </script>

          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>

          <tr>
             <td colspan="2" class="sectionHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['profile']['plugins'];?>
</td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['charts']['control'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('i18n')->value['title']['charts'];?>
</td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['clients']['control'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('i18n')->value['title']['clients'];?>
 <?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['client_required']['control'];?>
 <span id="required_label"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required'];?>
</span></td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['invoices']['control'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('i18n')->value['title']['invoices'];?>
</td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['custom_fields']['control'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['custom_fields'];?>
 <span id="cf_config"><a href="cf_custom_fields.php"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['configure'];?>
</a></span></td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['expenses']['control'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('i18n')->value['title']['expenses'];?>
 <?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['tax_expenses']['control'];?>
 <span id="tax_label"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['tax'];?>
</span></td>
          </tr>
          <tr>
            <td align="right" nowrap><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['notifications']['control'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('i18n')->value['title']['notifications'];?>
 <span id="notifications_config"><a href="notifications.php"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['configure'];?>
</a></span></td>
          </tr>
<?php }?>

          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" height="50" align="center"><?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['btn_save']['control'];?>
</td>
          </tr>
        </table>
      </td>
    </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['profileForm']['close'];?>
