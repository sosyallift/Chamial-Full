<?php
/* Smarty version 3.1.29, created on 2019-01-18 16:55:04
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/controllers/base_document_install_completed.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c427568ef3ac6_43517043',
  'file_dependency' => 
  array (
    '13afbee0b81c9e080e01ca495fc422fcf4179472' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/controllers/base_document_install_completed.html',
      1 => 1547858558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c427568ef3ac6_43517043 ($_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.url_for_route.php';
?>
<div class="ow_txtcenter" style="margin-top:200px;">
    <h1 class="ow_icon_control ow_ic_ok ow_smallmargin">
       Installation complete
    </h1>
    <p>
       Go to the
       <a href="<?php echo smarty_function_url_for_route(array('for'=>'base_index'),$_smarty_tpl);?>
">main page</a> or to the <a href="<?php echo smarty_function_url_for_route(array('for'=>'admin_default'),$_smarty_tpl);?>
">admin area</a>
    </p>
</div>
<?php }
}
