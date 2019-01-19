<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:03:29
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/decorators/tooltip.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c42776131e739_31230443',
  'file_dependency' => 
  array (
    'a2673c0dad8f550286c1269c7db06896393a1d01' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/decorators/tooltip.html',
      1 => 1547858503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c42776131e739_31230443 ($_smarty_tpl) {
?>

<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }
}
