<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:44:56
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/custom_html_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4281183bafd1_65823390',
  'file_dependency' => 
  array (
    '934e1d2f40bd8a65e5f9673c03564ea3f7d6b8cf' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/custom_html_widget.html',
      1 => 1547858557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4281183bafd1_65823390 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_custom_html_widget">
	<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php } else { ?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>"base+custom_html_widget_no_content"),$_smarty_tpl);?>

            </div>
	<?php }?>
</div><?php }
}
