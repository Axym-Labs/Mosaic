<?php
/* Smarty version 4.4.1, created on 2024-03-15 15:07:48
  from 'C:\xampp\htdocs\Mosaic\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f456341d1a68_13100351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b76bb31bfcafb036d29e05d99aaa72df372c3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\index.tpl',
      1 => 1710511638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/linkbutton.tpl' => 4,
    'file:site_components/planOverview.tpl' => 1,
  ),
),false)) {
function content_65f456341d1a68_13100351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27016044465f456341c7830_53522451', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_27016044465f456341c7830_53522451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_27016044465f456341c7830_53522451',
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

<div class="flex justify-center">
    <h1 class="text-3xl font-bold">Created Subsites: <?php echo $_smarty_tpl->tpl_vars['subsiteCount']->value;?>
</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:site_components/planOverview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('plans'=>$_smarty_tpl->tpl_vars['plans']->value,'planperms'=>$_smarty_tpl->tpl_vars['planperms']->value,'planColumnTypeData'=>$_smarty_tpl->tpl_vars['planColumnTypeData']->value,'planpermColumnTypeData'=>$_smarty_tpl->tpl_vars['planpermColumnTypeData']->value), 0, false);
?>



<?php
}
}
/* {/block 'content'} */
}
