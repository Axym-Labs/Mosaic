<?php
/* Smarty version 4.4.1, created on 2024-03-16 22:42:01
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f612294594f2_79860123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4acc0baa1320cd2442ae5214dca3073e0e607571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\link.tpl',
      1 => 1710622711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f612294594f2_79860123 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <label for="Title">Title:</label>
    <input type="text" id="fragment-FragmentLink-Title" name="fragment-FragmentLink-Title" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Title');?>
>
</div>

<div>
    <label for="Link">Link:</label>
    <input type="text" id="fragment-FragmentLink-Link" name="fragment-FragmentLink-Link" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Link');?>
>
</div><?php }
}
