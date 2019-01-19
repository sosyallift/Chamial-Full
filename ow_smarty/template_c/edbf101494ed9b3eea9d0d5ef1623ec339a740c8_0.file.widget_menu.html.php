<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:03:29
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/widget_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4277610c37c7_54275038',
  'file_dependency' => 
  array (
    'edbf101494ed9b3eea9d0d5ef1623ec339a740c8' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/widget_menu.html',
      1 => 1547858558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4277610c37c7_54275038 ($_smarty_tpl) {
?>
<div class="clearfix">
	<div class="ow_box_menu">
		<?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tab_0_saved_item = isset($_smarty_tpl->tpl_vars['tab']) ? $_smarty_tpl->tpl_vars['tab'] : false;
$_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
$__foreach_tab_0_saved_local_item = $_smarty_tpl->tpl_vars['tab'];
?>
			<a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['active']) && $_smarty_tpl->tpl_vars['tab']->value['active']) {?> class="active"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</span></a>
		<?php
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_0_saved_local_item;
}
if ($__foreach_tab_0_saved_item) {
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_0_saved_item;
}
?>
	</div>
</div><?php }
}
