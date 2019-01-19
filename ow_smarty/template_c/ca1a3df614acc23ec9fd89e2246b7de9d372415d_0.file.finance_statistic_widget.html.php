<?php
/* Smarty version 3.1.29, created on 2019-01-18 17:03:29
  from "/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/admin/views/components/finance_statistic_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c4277610d3788_43553700',
  'file_dependency' => 
  array (
    'ca1a3df614acc23ec9fd89e2246b7de9d372415d' => 
    array (
      0 => '/home/chamdev/domains/develop.chamial.com/public_html/ow_system_plugins/admin/views/components/finance_statistic_widget.html',
      1 => 1547858553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4277610d3788_43553700 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for_route')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/chamdev/domains/develop.chamial.com/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    #admin-finance-statistics-header #finance-statistics-menu {
        float:right;
    }

    #admin-finance-statistics-container .ow_ajaxloader_preloader {
        min-height:300px;
    }

    #admin-finance-history {
        float:right;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    var defaultPeriod = "<?php echo $_smarty_tpl->tpl_vars['defaultPeriod']->value;?>
";

    $("#finance-statistics-menu a").on("click", function(){
        defaultPeriod = $(this).attr("id");
        defaultPeriod = defaultPeriod.replace("finance_menu_statistics_", "");

        reloadChart();
    });

    /**
     * Reload chart
     *
     * @return void
     */
    function reloadChart()
    {
        if (!defaultPeriod)
        {
            return;
        }

        OW.loadComponent("ADMIN_CMP_FinanceStatistic", [{ "defaultPeriod" : defaultPeriod }], "#admin-finance-statistics-container");
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="admin-finance-statistics-header">
    <div id="finance-statistics-menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </div>
    <div class="clearfix"></div>
</div>

<div id="admin-finance-statistics-container">
    <?php echo $_smarty_tpl->tpl_vars['statistics']->value;?>

</div>

<div id="admin-finance-history">
    <?php ob_start();
echo smarty_function_url_for_route(array('for'=>'admin_finance'),$_smarty_tpl);
$_tmp1=ob_get_clean();
echo smarty_function_decorator(array('name'=>"button_list_item",'langLabel'=>"admin+statistics_history",'onclick'=>"location.href='".$_tmp1."'"),$_smarty_tpl);?>

</div>
<div class="clearfix"></div>
<?php }
}
