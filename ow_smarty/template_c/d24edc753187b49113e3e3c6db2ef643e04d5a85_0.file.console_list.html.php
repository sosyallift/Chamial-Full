<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:03:29
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/console_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c427761330946_38300304',
  'file_dependency' => 
  array (
    'd24edc753187b49113e3e3c6db2ef643e04d5a85' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/console_list.html',
      1 => 1547858557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c427761330946_38300304 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_console_list_wrapper OW_ConsoleListContainer">
    <div class="ow_nocontent OW_ConsoleListNoContent"><?php echo smarty_function_text(array('key'=>'base+no_items'),$_smarty_tpl);?>
</div>
    <ul class="ow_console_list OW_ConsoleList">

    </ul>
    <div class="ow_preloader_content ow_console_list_preloader OW_ConsoleListPreloader" style="visibility: hidden"></div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['viewAll']->value)) {?>
    <div class="ow_console_view_all_btn_wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['viewAll']->value['url'];?>
" class="ow_console_view_all_btn"><?php echo $_smarty_tpl->tpl_vars['viewAll']->value['label'];?>
</a></div>
<?php }
}
}
