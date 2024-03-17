<?php
/* Smarty version 4.4.1, created on 2024-03-17 13:50:50
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6e72a1f6495_40109077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ae9be6b13325af71c2da256828eecb2f95e86e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\text.tpl',
      1 => 1710679784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6e72a1f6495_40109077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <label for="fragment-FragmentText-Title">Title:</label>
    <input type="text" id="fragment-FragmentText-Title" name="fragment-FragmentText-Title" required <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Title');
}?>>
</div>

<div>
    <label for="fragment-FragmentText-Text">Text:</label>
    <input type="text" id="fragment-FragmentText-Text" name="fragment-FragmentText-Text" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Text');
}?>>
</div>
<?php }
}
