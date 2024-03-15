<?php
/* Smarty version 4.4.1, created on 2024-03-08 14:50:19
  from 'C:\xampp\htdocs\Mosaic\src\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eb179b258962_11334312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b76bb31bfcafb036d29e05d99aaa72df372c3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\index.tpl',
      1 => 1709905804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/linkbutton.tpl' => 4,
    'file:site_components/planOverview.tpl' => 1,
    'file:user/userProfile.tpl' => 1,
  ),
),false)) {
function content_65eb179b258962_11334312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138483600865eb179b23cd83_38911912', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_138483600865eb179b23cd83_38911912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_138483600865eb179b23cd83_38911912',
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


<?php  $_prefixVariable1 = $_smarty_tpl->tpl_vars['BusinessConstants']->value;
if ($_prefixVariable1::$HOSTMODE == "dev") {?>
    <h1 class="text-center text-3xl font-bold">Test: retrieve users</h1>
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:user/userProfile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user'=>$_smarty_tpl->tpl_vars['user']->value,'userColumnTypeData'=>$_smarty_tpl->tpl_vars['userColumnTypeData']->value), 0, true);
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
