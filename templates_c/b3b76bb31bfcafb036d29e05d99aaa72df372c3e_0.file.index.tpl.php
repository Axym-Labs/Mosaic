<?php
/* Smarty version 4.4.1, created on 2024-03-08 10:46:07
  from 'C:\xampp\htdocs\Mosaic\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eade5f42e386_91975874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b76bb31bfcafb036d29e05d99aaa72df372c3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\index.tpl',
      1 => 1709891166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/linkbutton.tpl' => 4,
    'file:user.tpl' => 1,
  ),
),false)) {
function content_65eade5f42e386_91975874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45280361665eade5f411b25_75291002', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_45280361665eade5f411b25_75291002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_45280361665eade5f411b25_75291002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>

<?php $_smarty_tpl->_subTemplateRender('file:components/linkbutton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Test 1",'route'=>"/",'type'=>"primary"), 0, false);
$_smarty_tpl->_subTemplateRender('file:components/linkbutton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Test 1",'route'=>"/",'type'=>"secondary"), 0, true);
$_smarty_tpl->_subTemplateRender('file:components/linkbutton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Test 1",'route'=>"/",'type'=>"soft"), 0, true);
$_smarty_tpl->_subTemplateRender('file:components/linkbutton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Test 1",'route'=>"/",'type'=>"warn"), 0, true);
?>

<?php  $_prefixVariable1 = $_smarty_tpl->tpl_vars['BusinessConstants']->value;
if ($_prefixVariable1::$HOSTMODE == "dev") {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user'=>$_smarty_tpl->tpl_vars['user']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php
}
}
/* {/block 'content'} */
}
