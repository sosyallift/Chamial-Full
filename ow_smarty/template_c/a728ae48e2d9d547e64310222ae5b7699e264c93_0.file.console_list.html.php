<?php
/* Smarty version 3.1.29, created on 2019-01-28 02:44:36
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_plugins/mailbox/views/components/console_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4edd1437d7f6_39615155',
  'file_dependency' => 
  array (
    'a728ae48e2d9d547e64310222ae5b7699e264c93' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_plugins/mailbox/views/components/console_list.html',
      1 => 1547858537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4edd1437d7f6_39615155 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_console_list_wrapper OW_ConsoleListContainer">
    <div class="ow_nocontent OW_ConsoleListNoContent"><?php echo smarty_function_text(array('key'=>'base+empty_list'),$_smarty_tpl);?>
</div>
    <ul class="ow_console_list OW_ConsoleList"></ul>
    <div class="ow_preloader_content ow_console_list_preloader OW_ConsoleListPreloader" style="visibility: hidden"></div>
</div>

<div class="<?php if ($_smarty_tpl->tpl_vars['mailModeEnabled']->value && $_smarty_tpl->tpl_vars['isAuthorizedSendMessage']->value) {?>ow_console_messages_btns<?php } else { ?>ow_console_messages_btn<?php }?> clearfix">
    <div class="ow_console_messages_viewall"><a href="<?php echo $_smarty_tpl->tpl_vars['viewAllUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"mailbox+view_all"),$_smarty_tpl);?>
</a></div>
    <?php if ($_smarty_tpl->tpl_vars['mailModeEnabled']->value && $_smarty_tpl->tpl_vars['isAuthorizedSendMessage']->value) {?><div class="ow_console_messages_send"><a href="javascript://" id="mailboxConsoleListSendMessageBtn" ><?php echo smarty_function_text(array('key'=>"mailbox+send_message"),$_smarty_tpl);?>
</a></div><?php }?>
</div><?php }
}
