<?php
/* Smarty version 4.4.1, created on 2024-03-17 15:22:02
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragment_components\editContentFragment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6fc8aec2401_56177483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2df296258f1add87807fd1190f630f3f2b98fd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragment_components\\editContentFragment.tpl',
      1 => 1710685287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6fc8aec2401_56177483 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <label for="Position">Position:</label>
    <input type="number" id="Position" name="Position" placeholder="Enter Position" value="<?php echo $_smarty_tpl->tpl_vars['subsiteCf']->value['Position'];?>
">
</div>
<div>
    <label for="BackgroundColor">Background Color (HEX):</label>
    <input type="color" id="BackgroundColor" name="BackgroundColor" value="#<?php echo $_smarty_tpl->tpl_vars['subsiteCf']->value['BackgroundColor'];?>
">
</div>
<div>
    <label for="Opacity">Background Opacity:</label>
    <input type="range" min="0.0" max="1.0" id="Opacity" name="Opacity" step="0.01" value="<?php if (((isset($_smarty_tpl->tpl_vars['subsiteCf']->value['Opacity'])) && $_smarty_tpl->tpl_vars['subsiteCf']->value['Opacity'] != '')) {
echo $_smarty_tpl->tpl_vars['subsiteCf']->value['Opacity'];
} else { ?>0<?php }?>">
</div>
<div>
    <label for="BackgroundImage">Background Image:</label>
    <input type="file" id="BackgroundImage" name="BackgroundImage" accept=".jpg, .jpeg">
</div><?php }
}
