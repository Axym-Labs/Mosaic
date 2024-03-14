<?php
/* Smarty version 4.4.1, created on 2024-03-14 23:19:05
  from 'C:\xampp\htdocs\Mosaic\src\templates\subsiteEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f377d92a19a3_20300788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c48afc605c11aa8deb16fff7f5d6446b687dc49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\subsiteEdit.tpl',
      1 => 1710454743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:larger_components/subsiteView.tpl' => 1,
  ),
),false)) {
function content_65f377d92a19a3_20300788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132510968065f377d9298bf1_50021003', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_132510968065f377d9298bf1_50021003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_132510968065f377d9298bf1_50021003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="lg:grid lg:gird-cols-2 gap-8">
    <div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['editFragments']->value, 'editFragment');
$_smarty_tpl->tpl_vars['editFragment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['editFragment']->value) {
$_smarty_tpl->tpl_vars['editFragment']->do_else = false;
?>
            <div class="p-4 border-2 border-primary m-4 rounded-xl">
                [development info: EDIT-FRAGMENT]
                <?php echo $_smarty_tpl->tpl_vars['editFragment']->value;?>

            </div>
            <?php
}
if ($_smarty_tpl->tpl_vars['editFragment']->do_else) {
?>
            <div>
                <h1>
                    Nothing here yet.
                </h1>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div>
    <?php $_smarty_tpl->_subTemplateRender('file:larger_components/subsiteView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
