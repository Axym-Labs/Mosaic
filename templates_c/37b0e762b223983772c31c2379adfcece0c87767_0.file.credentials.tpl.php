<?php
/* Smarty version 4.4.1, created on 2024-03-16 22:42:01
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\credentials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f61229373d97_75031762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b0e762b223983772c31c2379adfcece0c87767' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\credentials.tpl',
      1 => 1710621719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f61229373d97_75031762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <label for="Username">Username:</label>
    <input type="text" id="Username" name="Username" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Username');?>
>
</div>
<div>
    <label for="ShowPersonalData">ShowPersonalData:</label>
    <input type="checkbox" id="fragment-FragmentCredentials-ShowPersonalData" name="fragment-FragmentCredentials-ShowPersonalData" <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'ShowPersonalData');?>
>
</div>
<?php }
}
