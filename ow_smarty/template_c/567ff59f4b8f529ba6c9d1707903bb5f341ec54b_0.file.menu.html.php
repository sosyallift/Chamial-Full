<?php
/* Smarty version 3.1.29, created on 2019-01-28 02:44:36
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4edd141cd173_77070248',
  'file_dependency' => 
  array (
    '567ff59f4b8f529ba6c9d1707903bb5f341ec54b' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/menu.html',
      1 => 1547858557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4edd141cd173_77070248 ($_smarty_tpl) {
?>
<ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 clearfix">
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
?><li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
if (!empty($_smarty_tpl->tpl_vars['item']->value['active'])) {?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?> target="_blank"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a></li><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</ul><?php }
}
