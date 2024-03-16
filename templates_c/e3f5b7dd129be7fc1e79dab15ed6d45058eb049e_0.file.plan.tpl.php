<?php
/* Smarty version 4.4.1, created on 2024-03-16 23:48:45
  from 'C:\xampp\htdocs\Mosaic\src\templates\site_components\plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f44ae1b4bfb8_04286177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f5b7dd129be7fc1e79dab15ed6d45058eb049e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\site_components\\plan.tpl',
      1 => 1709905278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f44ae1b4bfb8_04286177 (Smarty_Internal_Template $_smarty_tpl) {
echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['plan']->value,$_smarty_tpl->tpl_vars['planColumnTypeData']->value);?>


<?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['planperm']->value,$_smarty_tpl->tpl_vars['planpermColumnTypeData']->value);?>

<?php }
}
