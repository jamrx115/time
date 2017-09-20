<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:01:35
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1649585948550a2dff5f02b1-37096026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac83d37c5b7915db194cb3b4aa89bed4680b69ef' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/login.tpl',
      1 => 1426047561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1649585948550a2dff5f02b1-37096026',
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

      <?php $_template = new Smarty_Internal_Template("login.".(@AUTH_MODULE).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      <?php echo $_smarty_tpl->getVariable('forms')->value['loginForm']['close'];?>

    </td>
  </tr>
</table>

<?php if (!empty($_smarty_tpl->getVariable('about_text',null,true,false)->value)){?>
  <div id="LoginAboutText"> <?php echo $_smarty_tpl->getVariable('about_text')->value;?>
 </div>
<?php }?>