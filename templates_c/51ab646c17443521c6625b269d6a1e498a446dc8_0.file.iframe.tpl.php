<?php
/* Smarty version 4.4.1, created on 2024-03-16 17:36:22
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f5ca86918dd4_50364374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ab646c17443521c6625b269d6a1e498a446dc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\iframe.tpl',
      1 => 1710601896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f5ca86918dd4_50364374 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <label for="Title">Title:</label>
    <input type="text" id="fragment-FragmentIframe-Title" name="fragment-FragmentIframe-Title">
  </div>
  
  <div>
    <label for="Url">Url:</label>
    <input type="text" id="fragment-FragmentIframe-Url" name="fragment-FragmentIframe-Url" required>
  </div>
  
  <div>
    <label for="MorePermissions">MorePermissions:</label>
    <input type="checkbox" id="fragment-FragmentIframe-MorePermissions" name="fragment-FragmentIframe-MorePermissions" value="1">
  </div>
  
  <div>
    <label for="Width">Width:</label>
    <input type="number" id="fragment-FragmentIframe-Width" name="fragment-FragmentIframe-Width">
  </div>
  
  <div>
    <label for="Height">Height:</label>
    <input type="number" id="fragment-FragmentIframe-Height" name="fragment-FragmentIframe-Height">
  </div><?php }
}
