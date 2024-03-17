<?php
/* Smarty version 4.4.1, created on 2024-03-17 13:46:11
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\credentials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6e613cab285_32814914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b0e762b223983772c31c2379adfcece0c87767' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\credentials.tpl',
      1 => 1710679570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6e613cab285_32814914 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <label for="Username">Username:</label>
    <input type="text" id="Username" name="Username" required <?php if (((isset($_smarty_tpl->tpl_vars['extraFragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['extraFragmentContent']->value,'Username');
}?>>
</div>
<div>
    <input type="checkbox" id="fragment-FragmentCredentials-ShowPersonalData" name="fragment-FragmentCredentials-ShowPersonalData" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'ShowPersonalData');
}?>>
    <label for="ShowPersonalData">ShowPersonalData</label>
</div>
<?php }
}
