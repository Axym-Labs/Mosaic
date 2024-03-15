<?php
/* Smarty version 4.4.1, created on 2024-03-16 00:14:41
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4d6611e7bc8_10459427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8804dc2b3f38037de2aa356e655fe48b70bc5be8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\text.tpl',
      1 => 1710533357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4d6611e7bc8_10459427 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class=" p-4 rounded-md">
    <h2 class="text-xl font-bold mb-2"><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Title"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Text"];?>
</p>
</div>
<?php }
}
