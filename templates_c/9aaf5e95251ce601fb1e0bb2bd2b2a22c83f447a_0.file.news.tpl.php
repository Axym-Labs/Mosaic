<?php
/* Smarty version 4.4.1, created on 2024-03-17 13:50:33
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6e719dcc305_56767162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aaf5e95251ce601fb1e0bb2bd2b2a22c83f447a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\news.tpl',
      1 => 1710679811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6e719dcc305_56767162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <label for="fragment-FragmentNews-Title">Title:</label>
    <input type="text" id="fragment-FragmentNews-Title" name="fragment-FragmentNews-Title" required <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Title');
}?>>
</div>

<div>
    <label for="fragment-FragmentNews-Description">Description:</label>
    <textarea id="fragment-FragmentNews-Description" name="fragment-FragmentNews-Description" required><?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['fragmentContent']->value,'Description');
}?></textarea>
</div>

<div>
    <label for="fragment-FragmentNews-Link">Link:</label>
    <input type="text" id="fragment-FragmentNews-Link" name="fragment-FragmentNews-Link" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Link');
}?>>
</div>

<div>
    <label for="fragment-FragmentNews-LinkDescription">LinkDescription:</label>
    <input type="text" id="fragment-FragmentNews-LinkDescription" name="fragment-FragmentNews-LinkDescription" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'LinkDescription');
}?>>
</div><?php }
}
