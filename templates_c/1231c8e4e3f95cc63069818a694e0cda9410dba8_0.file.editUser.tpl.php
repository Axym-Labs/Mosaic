<?php
/* Smarty version 4.4.1, created on 2024-03-16 16:22:04
  from 'C:\xampp\htdocs\Mosaic\src\templates\createUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f5b91c95c625_83036214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1231c8e4e3f95cc63069818a694e0cda9410dba8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\createUser.tpl',
      1 => 1710602512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/editUserComponent.tpl' => 1,
  ),
),false)) {
function content_65f5b91c95c625_83036214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202708203365f5b91c958999_07663604', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_202708203365f5b91c958999_07663604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_202708203365f5b91c958999_07663604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:user/editUserComponent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
