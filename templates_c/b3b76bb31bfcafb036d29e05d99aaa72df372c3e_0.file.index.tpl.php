<?php
/* Smarty version 4.4.1, created on 2024-03-06 17:26:02
  from 'C:\xampp\htdocs\Mosaic\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65e8991a2ec279_01663629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b76bb31bfcafb036d29e05d99aaa72df372c3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\index.tpl',
      1 => 1709742361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/linkbutton.tpl' => 4,
  ),
),false)) {
function content_65e8991a2ec279_01663629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66662358265e8991a2e2234_38809300', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_66662358265e8991a2e2234_38809300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_66662358265e8991a2e2234_38809300',
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

<?php
}
}
/* {/block 'content'} */
}
