<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:03:36
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/responsive_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c42776845c668_87106175',
  'file_dependency' => 
  array (
    '67f079dbec82fa944d9c7c16ef33140c951e5369' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/responsive_menu.html',
      1 => 1547858557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c42776845c668_87106175 ($_smarty_tpl) {
?>
<div class="ow_responsive_menu ow_left" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <ul class="ow_main_menu clearfix" data-el="list"><?php
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
if (!empty($_smarty_tpl->tpl_vars['item']->value['active'])) {?> active<?php }?>" data-el="item"> <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?> target="_blank"<?php }?>> <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span> </a> </li><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?></ul>
    <div class="ow_menu_more_wrap ow_cursor_pointer">
        <div class="ow_menu_more">
            <div class="ow_menu_more_cont">
                <ul class="ow_menu_more_list" data-el="more-list">

                </ul>
            </div>
        </div>
    </div>
</div>
<?php }
}
