<?php
/* Smarty version 4.4.1, created on 2024-03-17 13:15:27
  from 'C:\xampp\htdocs\Mosaic\src\templates\subsiteEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6dedfe8dc36_92138694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c48afc605c11aa8deb16fff7f5d6446b687dc49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\subsiteEdit.tpl',
      1 => 1710677332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site_components/editSubsiteComponent.tpl' => 1,
    'file:fragment_components/editContentFragment.tpl' => 1,
    'file:components/submitbutton.tpl' => 2,
    'file:components/linkbutton.tpl' => 1,
    'file:site_components/subsiteView.tpl' => 1,
  ),
),false)) {
function content_65f6dedfe8dc36_92138694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12552006965f6dedfe761e5_08584509', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_12552006965f6dedfe761e5_08584509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12552006965f6dedfe761e5_08584509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('subsiteId', $_smarty_tpl->tpl_vars['subsite']->value["SubSiteId"]);?>

<div>
    <?php $_smarty_tpl->_subTemplateRender("file:site_components/editSubsiteComponent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subsiteSubmitText'=>"Update subsite",'subsiteIsUpdate'=>true,'existingSubsiteId'=>$_smarty_tpl->tpl_vars['subsiteId']->value), 0, false);
?>
</div>

<div class="lg:grid lg:grid-cols-2 gap-8">
    <div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['editFragments']->value, 'editFragment');
$_smarty_tpl->tpl_vars['editFragment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['editFragment']->value) {
$_smarty_tpl->tpl_vars['editFragment']->do_else = false;
?>
            <div class="p-4 border-l-2 border-primary rounded-r-xl m-4 md:m-6 bg-highlightedbg">
                <form method="POST" enctype="multipart/form-data" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/edit/s/<?php echo $_smarty_tpl->tpl_vars['subsiteId']->value;?>
/update-f/<?php echo $_smarty_tpl->tpl_vars['editFragment']->value['SubsiteCfContent']['SubsiteContentFragmentId'];?>
">
                    <?php $_smarty_tpl->_subTemplateRender("file:fragment_components/editContentFragment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subsiteCf'=>$_smarty_tpl->tpl_vars['editFragment']->value["SubsiteCfContent"]), 0, true);
?>
                    <?php echo $_smarty_tpl->tpl_vars['editFragment']->value["FragmentContent"];?>

                    <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Update",'type'=>"primary"), 0, true);
?>
                </form>
                <form method="POST" enctype="multipart/form-data" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
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
        <div class="flex justify-center">
            <?php if ($_smarty_tpl->tpl_vars['allowedToCreateFragment']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Create fragment",'route'=>"/edit/s/".((string)$_smarty_tpl->tpl_vars['subsiteId']->value)."/create-f",'type'=>"primary"), 0, false);
?>
            <?php } else { ?>
                <p>
                    You have reached the maximum amount of fragments for this subsite. Upgrade your plan.
                </p>
            <?php }?>        
        </div>
    </div>
    <div class="lg:max-h-screen">
        <div class="mb-1">
            <h1 class="uppercase text-gray-600 font-extrabold">
                Preview
            </h1>
        </div>
        <div class="border border-2 rounded-xl p-4 border-gray-600 h-full">
            <?php $_smarty_tpl->_subTemplateRender('file:site_components/subsiteView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
