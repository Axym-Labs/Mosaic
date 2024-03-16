<?php
/* Smarty version 4.4.1, created on 2024-03-16 17:34:56
  from 'C:\xampp\htdocs\Mosaic\src\templates\createSubsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f5ca300b32b2_39849393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41a860b1538c1b2b337a951c44aef608c03a1b1' => 
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
function content_65f5ca300b32b2_39849393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19960379065f5ca300afee1_49082914', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_19960379065f5ca300afee1_49082914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19960379065f5ca300afee1_49082914',
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
