<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:03:29
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/console_dropdown_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4277612f17a6_97631809',
  'file_dependency' => 
  array (
    'fc6f2914153c0b7e08f192611b3b5f949c160650' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/console_dropdown_menu.html',
      1 => 1547858557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4277612f17a6_97631809 ($_smarty_tpl) {
?>
<ul class="ow_console_dropdown">
    <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cddm_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_cddm']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cddm'] : false;
$__foreach_cddm_0_saved_item = isset($_smarty_tpl->tpl_vars['sitems']) ? $_smarty_tpl->tpl_vars['sitems'] : false;
$__foreach_cddm_0_saved_key = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$__foreach_cddm_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['sitems'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_cddm'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$__foreach_cddm_0_iteration=0;
$_smarty_tpl->tpl_vars['sitems']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['sitems']->value) {
$_smarty_tpl->tpl_vars['sitems']->_loop = true;
$__foreach_cddm_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['last'] = $__foreach_cddm_0_iteration == $__foreach_cddm_0_total;
$__foreach_cddm_0_saved_local_item = $_smarty_tpl->tpl_vars['sitems'];
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['sitems']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <li class="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {
echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?> ow_dropdown_menu_item ow_cursor_pointer" >
                <div class="ow_console_dropdown_cont">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
                </div>
            </li>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['last'] : null)) {?>
            <li><div class="ow_console_divider"></div></li>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['sitems'] = $__foreach_cddm_0_saved_local_item;
}
if ($__foreach_cddm_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cddm'] = $__foreach_cddm_0_saved;
}
if ($__foreach_cddm_0_saved_item) {
$_smarty_tpl->tpl_vars['sitems'] = $__foreach_cddm_0_saved_item;
}
if ($__foreach_cddm_0_saved_key) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_cddm_0_saved_key;
}
?>
</ul><?php }
}
