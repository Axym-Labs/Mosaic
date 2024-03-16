<?php
/* Smarty version 4.4.1, created on 2024-03-16 22:42:01
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f612293d18f2_68548895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ab646c17443521c6625b269d6a1e498a446dc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\iframe.tpl',
      1 => 1710623167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f612293d18f2_68548895 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <label for="Title">Title:</label>
    <input type="text" id="fragment-FragmentIframe-Title" name="fragment-FragmentIframe-Title" <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Title');?>
>
</div>

<div>
    <label for="Url">Url:</label>
    <input type="text" id="fragment-FragmentIframe-Url" name="fragment-FragmentIframe-Url" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Url');?>
>
</div>

<div>
    <label for="MorePermissions">MorePermissions:</label>
    <input type="checkbox" id="fragment-FragmentIframe-MorePermissions" name="fragment-FragmentIframe-MorePermissions" value="1" <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'MorePermissions');?>
>
</div>

<div>
    <label for="Width">Width:</label>
    <input type="number" id="fragment-FragmentIframe-Width" name="fragment-FragmentIframe-Width" <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Width');?>
>
</div>

<div>
    <label for="Height">Height:</label>
    <input type="number" id="fragment-FragmentIframe-Height" name="fragment-FragmentIframe-Height" <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Height');?>
>
</div><?php }
}
