<?php
/* Smarty version 4.4.1, created on 2024-03-08 14:51:58
  from 'C:\xampp\htdocs\Mosaic\src\templates\pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eb17fe34b439_27591484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39f6c5d9faa9dbc7c7fe2e8ff9dfb7ef0d64aa29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\pricing.tpl',
      1 => 1709905917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site_components/planOverview.tpl' => 1,
  ),
),false)) {
function content_65eb17fe34b439_27591484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122509736465eb17fe344463_80012791', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_122509736465eb17fe344463_80012791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122509736465eb17fe344463_80012791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:site_components/planOverview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('plans'=>$_smarty_tpl->tpl_vars['plans']->value,'planperms'=>$_smarty_tpl->tpl_vars['planperms']->value,'planColumnTypeData'=>$_smarty_tpl->tpl_vars['planColumnTypeData']->value,'planpermColumnTypeData'=>$_smarty_tpl->tpl_vars['planpermColumnTypeData']->value), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
