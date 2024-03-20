<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:51:40
  from 'C:\xampp\htdocs\Mosaic\src\templates\site_components\subsiteView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f73bbc09e256_98004296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e2fed0d8659f2f48b0632be0f36a63c53acce6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\site_components\\subsiteView.tpl',
      1 => 1710701383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/empty.tpl' => 1,
  ),
),false)) {
function content_65f73bbc09e256_98004296 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="flex justify-center">
    <div style="max-width: 1000px">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fragments']->value, 'fragment');
$_smarty_tpl->tpl_vars['fragment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fragment']->value) {
$_smarty_tpl->tpl_vars['fragment']->do_else = false;
?>
            <div class="p-4 bg-highlightedbg shadow-lg my-4 rounded-xl" style="
                <?php if (($_smarty_tpl->tpl_vars['fragment']->value['subsiteCf']['BackgroundColor'] != 'NULL' && $_smarty_tpl->tpl_vars['fragment']->value['subsiteCf']['BackgroundColor'] != '')) {?>background-color: <?php echo GenericRender::HexToRGB($_smarty_tpl->tpl_vars['fragment']->value['subsiteCf']['BackgroundColor'],$_smarty_tpl->tpl_vars['fragment']->value['subsiteCf']['Opacity']);?>
;<?php }?>
                <?php if (($_smarty_tpl->tpl_vars['fragment']->value['subsiteCf']['BackgroundImage'] != 'NULL' && $_smarty_tpl->tpl_vars['fragment']->value['subsiteCf']['BackgroundImage'] != '')) {?>background-image: url('data:image/jpeg;base64,<?php echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['fragment']->value['subsiteCf'],'BackgroundImage','img');?>
');<?php }?>
                ">
                <!-- <img class="h-12 inline-block" src="data:image/jpeg;base64,<?php echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['fragment']->value['subsiteCf'],'BackgroundImage','img');?>
" alt="Background Image"> -->
                <?php echo $_smarty_tpl->tpl_vars['fragment']->value["Content"];?>

            </div>
        <?php
}
if ($_smarty_tpl->tpl_vars['fragment']->do_else) {
?>
            <?php $_smarty_tpl->_subTemplateRender("file:components/empty.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
