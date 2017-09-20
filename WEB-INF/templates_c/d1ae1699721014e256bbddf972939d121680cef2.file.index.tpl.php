<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:01:34
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1081512404550a2dfef2b490-54897305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ae1699721014e256bbddf972939d121680cef2' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/index.tpl',
      1 => 1426047559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1081512404550a2dfef2b490-54897305',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('content_page_name')->value){?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('content_page_name')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>