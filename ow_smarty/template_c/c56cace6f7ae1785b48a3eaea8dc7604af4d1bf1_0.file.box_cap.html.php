<?php
/* Smarty version 3.1.29, created on 2019-01-18 16:55:04
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/decorators/box_cap.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4275689b1183_09856118',
  'file_dependency' => 
  array (
    'c56cace6f7ae1785b48a3eaea8dc7604af4d1bf1' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/decorators/box_cap.html',
      1 => 1547858502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4275689b1183_09856118 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.text.php';
?>

<div class="ow_box_cap<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])) {?>_<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];
}
if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?>">
	<div class="ow_box_cap_right">
		<div class="ow_box_cap_body">
			<h3 class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['iconClass'])) {
echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];
} else { ?>ow_ic_file<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])) {
echo $_smarty_tpl->tpl_vars['data']->value['extraString'];
}?>><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])) {?>
			   <?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>

			<?php } else { ?>
			   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {
echo $_smarty_tpl->tpl_vars['data']->value['label'];
} else { ?>&nbsp;<?php }?>
		    <?php }?>
		    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])) {?></a><?php }?>
			</h3>
		   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])) {
echo $_smarty_tpl->tpl_vars['data']->value['content'];
}?>
		</div>
	</div>
</div><?php }
}
