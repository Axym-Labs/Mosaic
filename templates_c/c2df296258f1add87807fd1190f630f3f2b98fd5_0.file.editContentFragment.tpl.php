<?php
/* Smarty version 4.4.1, created on 2024-03-15 23:38:22
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragment_components\editContentFragment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4cdde3017a7_08450673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2df296258f1add87807fd1190f630f3f2b98fd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragment_components\\editContentFragment.tpl',
      1 => 1710542057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4cdde3017a7_08450673 (Smarty_Internal_Template $_smarty_tpl) {
?>subsiteCf

<input type="number" name="Position" placeholder="Enter Position" value="<?php echo $_smarty_tpl->tpl_vars['subsiteCf']->value['Position'];?>
">
<input type="text" name="BackgroundColor" maxlength="6" placeholder="Enter BackgroundColor" value="<?php echo $_smarty_tpl->tpl_vars['subsiteCf']->value['BackgroundColor'];?>
">
<input type="number" name="Opacity" step="0.01" placeholder="Enter Opacity (between 0.0 and 1.0)" value="<?php echo $_smarty_tpl->tpl_vars['subsiteCf']->value['Opacity'];?>
">
<input type="file" name="BackgroundImage" accept="image/*">

<?php }
}
