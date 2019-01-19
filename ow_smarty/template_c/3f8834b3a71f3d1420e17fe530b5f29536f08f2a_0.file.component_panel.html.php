<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:44:56
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/controllers/component_panel.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4281184c2365_53302342',
  'file_dependency' => 
  array (
    '3f8834b3a71f3d1420e17fe530b5f29536f08f2a' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/views/controllers/component_panel.html',
      1 => 1547858558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4281184c2365_53302342 ($_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)) {?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }
}
}
