<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:03:29
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/admin/views/controllers/base_dashboard.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c42776116a128_43897699',
  'file_dependency' => 
  array (
    'e7511d70288188625c5ac28cbd9d4c16efd7a50b' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/admin/views/controllers/base_dashboard.html',
      1 => 1547858554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c42776116a128_43897699 ($_smarty_tpl) {
?>
<div class="ow_stdmargin">
    <iframe class="ow_full" src="<?php echo $_smarty_tpl->tpl_vars['adminDashboardIframeUrl']->value;?>
" style="border: 0pt none ; width: 100%; height: 250px;" frameborder="0"></iframe>
</div>
<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;
}
}
