<?php
/* Smarty version 3.1.29, created on 2019-01-28 02:44:36
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/decorators/floatbox.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4edd143cb5a3_68633637',
  'file_dependency' => 
  array (
    'e963e3bbfbf6b44f81016cdc58fc2ef6bfe2e988' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/base/decorators/floatbox.html',
      1 => 1547858503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4edd143cb5a3_68633637 ($_smarty_tpl) {
?>

<div style="display: none" id="floatbox_prototype">

    
    <div class="default">
        <div class="floatbox_canvas floatbox_default">
            <div class="floatbox_preloader_container">
                <div class="floatbox_preloader ow_floatbox_preloader"></div>
            </div>

            <div class="floatbox_container">
				<div class="ow_bg_color">
					<div class="floatbox_header">
						<div class="clearfix floatbox_cap">
							<h3 class="floatbox_title"></h3>
							<div class="ow_box_cap_icons clearfix">
								<a title="close" class="ow_ic_delete close" href="javascript://"></a>
							</div>
					   </div>
					</div>
					<div class="floatbox_body"></div>
					<div class="floatbox_bottom"></div>
				</div>
            </div>
        </div>
    </div>

    
    <div class="empty">
        <div class="floatbox_canvas floatbox_empty">
            <div class="floatbox_preloader_container">
                <div class="floatbox_preloader ow_floatbox_preloader"></div>
            </div>

            <div class="floatbox_container">
				<div class="ow_bg_color">
					<div class="floatbox_header">
						<div class="ow_box_cap_icons clearfix">
							<a title="close" class="ow_ic_delete close" href="javascript://"></a>
						</div>
					</div>
					<div class="floatbox_body"></div>
					<div class="floatbox_bottom"></div>
				</div>
            </div>
        </div>
    </div>

</div><?php }
}
