<?php
/* Smarty version 4.4.1, created on 2024-03-15 23:54:06
  from 'C:\xampp\htdocs\Mosaic\src\templates\subsiteEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4d18eb4c567_20960091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c48afc605c11aa8deb16fff7f5d6446b687dc49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\subsiteEdit.tpl',
      1 => 1710543216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:fragment_components/editContentFragment.tpl' => 1,
    'file:components/submitbutton.tpl' => 2,
    'file:components/linkbutton.tpl' => 1,
    'file:site_components/subsiteView.tpl' => 1,
  ),
),false)) {
function content_65f4d18eb4c567_20960091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116907685365f4d18eb3f747_00447724', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_116907685365f4d18eb3f747_00447724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_116907685365f4d18eb3f747_00447724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('subsiteId', $_smarty_tpl->tpl_vars['subsite']->value["SubSiteId"]);?>

<div class="lg:grid lg:grid-cols-2 gap-8">
    <div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['editFragments']->value, 'editFragment');
$_smarty_tpl->tpl_vars['editFragment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['editFragment']->value) {
$_smarty_tpl->tpl_vars['editFragment']->do_else = false;
?>
            <div class="p-4 border-2 border-primary m-4 rounded-xl">
                <form method="post" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/edit/s/<?php echo $_smarty_tpl->tpl_vars['subsiteId']->value;?>
/update-f/<?php echo $_smarty_tpl->tpl_vars['editFragment']->value['SubsiteCfContent']['SubsiteContentFragmentId'];?>
">
                    <?php $_smarty_tpl->_subTemplateRender("file:fragment_components/editContentFragment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subsiteCf'=>$_smarty_tpl->tpl_vars['editFragment']->value["SubsiteCfContent"]), 0, true);
?>
                    <?php echo $_smarty_tpl->tpl_vars['editFragment']->value["FragmentContent"];?>

                    <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Update",'type'=>"primary"), 0, true);
?>
                </form>
                <form method="post" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/edit/s/<?php echo $_smarty_tpl->tpl_vars['subsiteId']->value;?>
/delete-f/<?php echo $_smarty_tpl->tpl_vars['editFragment']->value['SubsiteCfContent']['SubsiteContentFragmentId'];?>
">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Delete",'type'=>"warn"), 0, true);
?>
                </form>
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
        <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Create fragment",'route'=>"/edit/s/".((string)$_smarty_tpl->tpl_vars['subsiteId']->value)."/create-f",'type'=>"primary"), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['editFragments']->value) {?>
        <?php }?>
    </div>
    <div>
    <?php $_smarty_tpl->_subTemplateRender('file:site_components/subsiteView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
