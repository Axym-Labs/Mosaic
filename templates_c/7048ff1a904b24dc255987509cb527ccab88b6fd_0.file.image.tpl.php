<?php
/* Smarty version 4.4.1, created on 2024-03-16 17:36:22
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f5ca8695ed70_09631622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7048ff1a904b24dc255987509cb527ccab88b6fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\image.tpl',
      1 => 1710601906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f5ca8695ed70_09631622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
  <label for="ImageContent">ImageContent:</label>
  <input type="file" id="fragment-FragmentImage-ImageContent" name="fragment-FragmentImage-ImageContent" accept="image/jpeg" required>
</div>

<div>
  <label for="Description">Description:</label>
  <textarea id="fragment-FragmentImage-Description" name="fragment-FragmentImage-Description"></textarea>
</div><?php }
}
