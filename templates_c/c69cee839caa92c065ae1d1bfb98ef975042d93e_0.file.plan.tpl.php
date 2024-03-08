<?php
/* Smarty version 4.4.1, created on 2024-03-08 14:41:35
  from 'C:\xampp\htdocs\Mosaic\src\templates\larger_components\plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eb158fcad966_36803755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c69cee839caa92c065ae1d1bfb98ef975042d93e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\larger_components\\plan.tpl',
      1 => 1709905278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eb158fcad966_36803755 (Smarty_Internal_Template $_smarty_tpl) {
echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['plan']->value,$_smarty_tpl->tpl_vars['planColumnTypeData']->value);?>


<?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['planperm']->value,$_smarty_tpl->tpl_vars['planpermColumnTypeData']->value);?>

<?php }
}
