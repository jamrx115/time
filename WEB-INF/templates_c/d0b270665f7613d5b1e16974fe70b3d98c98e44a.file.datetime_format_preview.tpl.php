<?php /* Smarty version Smarty-3.0.7, created on 2015-03-19 02:27:29
         compiled from "/home/alltic/public_html/time/WEB-INF/templates/datetime_format_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1156081893550a341136fcd3-87138058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b270665f7613d5b1e16974fe70b3d98c98e44a' => 
    array (
      0 => '/home/alltic/public_html/time/WEB-INF/templates/datetime_format_preview.tpl',
      1 => 1426047556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1156081893550a341136fcd3-87138058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script>
function MakeFormatPreview(id, selectElement)
{
  var dst = document.getElementById(id);
  if (dst) {
    var date = new Date();
    date.locale = "<?php echo $_smarty_tpl->getVariable('user')->value->lang;?>
";
    var format;
    if (selectElement.value != "") {
      format = selectElement.value;
    } else {
      format = selectElement.options[0].text;
    }
    dst.innerHTML = "<i>" + date.strftime(format) + "</i>";
  }
}
</script>
