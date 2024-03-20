<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:45:42
  from 'C:\xampp\htdocs\Mosaic\src\templates\createSubsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f73a564f5bb8_00806660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfb8b60b81629d1634c18986e6aadc7fa03da2bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\createSubsite.tpl',
      1 => 1710605746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site_components/editSubsiteComponent.tpl' => 1,
  ),
),false)) {
function content_65f73a564f5bb8_00806660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165508052765f73a564f2665_02893284', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_165508052765f73a564f2665_02893284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165508052765f73a564f2665_02893284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:site_components/editSubsiteComponent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
