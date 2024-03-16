<?php
/* Smarty version 4.4.1, created on 2024-03-16 17:36:22
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f5ca869ec516_15092227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aaf5e95251ce601fb1e0bb2bd2b2a22c83f447a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\news.tpl',
      1 => 1710601924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f5ca869ec516_15092227 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <label for="fragment-FragmentNews-Title">Title:</label>
    <input type="text" id="fragment-FragmentNews-Title" name="fragment-FragmentNews-Title" required>
</div>

<div>
    <label for="fragment-FragmentNews-Description">Description:</label>
    <textarea id="fragment-FragmentNews-Description" name="fragment-FragmentNews-Description" required></textarea>
</div>

<div>
    <label for="fragment-FragmentNews-Link">Link:</label>
    <input type="text" id="fragment-FragmentNews-Link" name="fragment-FragmentNews-Link">
</div>

<div>
    <label for="fragment-FragmentNews-LinkDescription">LinkDescription:</label>
    <input type="text" id="fragment-FragmentNews-LinkDescription" name="fragment-FragmentNews-LinkDescription">
</div><?php }
}
