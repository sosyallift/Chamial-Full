<?php
/* Smarty version 3.1.29, created on 2019-01-28 02:44:36
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_themes/simplicity/decorators/button.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4edd142fbb73_29769420',
  'file_dependency' => 
  array (
    'f54e2aabe8ee812fad1e20f506547b04bb0d80d1' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_themes/simplicity/decorators/button.html',
      1 => 1547858515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4edd142fbb73_29769420 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.text.php';
?>

<span class="ow_button"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];
}?>"><input type="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type']) && $_smarty_tpl->tpl_vars['data']->value['type'] == 'submit') {?>submit<?php } else { ?>button<?php }?>"  value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])) {
echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['data']->value['label'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['buttonName'])) {?> name="<?php echo $_smarty_tpl->tpl_vars['data']->value['buttonName'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])) {
echo $_smarty_tpl->tpl_vars['data']->value['extraString'];
}?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['onclick'])) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['data']->value['onclick'];?>
"<?php }?> /></span></span><?php }
}
