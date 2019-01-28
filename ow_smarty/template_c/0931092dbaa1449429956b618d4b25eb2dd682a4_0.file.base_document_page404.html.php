<?php
/* Smarty version 3.1.29, created on 2019-01-28 02:44:36
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/controllers/base_document_page404.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4edd1419d906_70705758',
  'file_dependency' => 
  array (
    '0931092dbaa1449429956b618d4b25eb2dd682a4' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/controllers/base_document_page404.html',
      1 => 1547858558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4edd1419d906_70705758 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.text.php';
if (!empty($_smarty_tpl->tpl_vars['base404RedirectMessage']->value)) {
echo $_smarty_tpl->tpl_vars['base404RedirectMessage']->value;
} else {
echo smarty_function_text(array('key'=>'base+base_document_404'),$_smarty_tpl);
}
}
}
