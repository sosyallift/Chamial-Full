<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:03:29
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/admin/views/components/admin_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c427761186638_19966504',
  'file_dependency' => 
  array (
    'e8029bf23f3fa5234e8c0e006e871b4a40fb2f9b' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/admin/views/components/admin_menu.html',
      1 => 1547858553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c427761186638_19966504 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.text.php';
?>
<ul class="<?php if ($_smarty_tpl->tpl_vars['subMenuClass']->value) {
echo $_smarty_tpl->tpl_vars['subMenuClass']->value;
} else { ?>ow_admin_submenu_hover<?php }?>">
    <li class="ow_admin_submenu_title"><?php echo smarty_function_text(array('key'=>"admin+sidebar_".((string)$_smarty_tpl->tpl_vars['category']->value)),$_smarty_tpl);?>
</li>
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <li <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['new_window'])) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</ul><?php }
}
