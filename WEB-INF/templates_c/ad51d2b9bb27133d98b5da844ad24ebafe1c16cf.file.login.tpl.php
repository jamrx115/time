<?php /* Smarty version Smarty-3.0.7, created on 2015-08-01 21:47:56
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/mobile/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82381425455bd3e8c9af289-64443934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad51d2b9bb27133d98b5da844ad24ebafe1c16cf' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/mobile/login.tpl',
      1 => 1426047601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82381425455bd3e8c9af289-64443934',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script>
<!--
function get_date() {
  var date = new Date();
  return date.strftime("%Y-%m-%d");
}
//-->
</script>
<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['open'];?>

      <?php $_template = new Smarty_Internal_Template("mobile/login.".(@AUTH_MODULE).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      <?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['close'];?>

    </td>
  </tr>
</table>