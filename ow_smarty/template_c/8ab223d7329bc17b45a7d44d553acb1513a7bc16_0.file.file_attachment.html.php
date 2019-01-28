<?php
/* Smarty version 3.1.29, created on 2019-01-28 02:44:36
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/file_attachment.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4edd142c07e3_24077107',
  'file_dependency' => 
  array (
    '8ab223d7329bc17b45a7d44d553acb1513a7bc16' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/components/file_attachment.html',
      1 => 1547858557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4edd142c07e3_24077107 ($_smarty_tpl) {
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
">
    <div class="ow_file_attachment_preview clearfix"<?php if (empty($_smarty_tpl->tpl_vars['data']->value['showPreview'])) {?> style="display:none;"<?php }?>></div>
    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['selector'])) {?>
    <div class="clearfix ow_status_update_btn_block">
        <span class="ow_attachment_icons">
            <div id="nfa-feed1" class="ow_attachments">
              <span class="buttons clearfix">
                  <a title="Attach" href="javascript://" class="attach"></a>
              </span>
            </div>
        </span>
    </div>
    <?php }?>
</div><?php }
}
