<?php
/* Smarty version 4.4.1, created on 2024-03-17 01:58:14
  from 'C:\xampp\htdocs\Mosaic\src\templates\user\subsiteList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f640267fdbb6_35068576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b173e95ab397c67a2832f77bfeea3bf338495848' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user\\subsiteList.tpl',
      1 => 1710637093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/linkbutton.tpl' => 2,
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f640267fdbb6_35068576 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['isVisitingAccountPage']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('isVisitingAccountPage', false);
}?>

<div class="w-full">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subsites']->value, 'subsite');
$_smarty_tpl->tpl_vars['subsite']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsite']->value) {
$_smarty_tpl->tpl_vars['subsite']->do_else = false;
?>
        <div class="p-1 bg-highlightedbg m-4 rounded-xl w-full">
            <div class="m-2 flex justify-between">
                <h2 class="flex justify-center mx-4 items-center text-2xl text-white inline-block">
                    <?php if (($_smarty_tpl->tpl_vars['planperm']->value["ShortLinkOption"] && $_smarty_tpl->tpl_vars['subsite']->value["ShortRoute"] != '')) {?>
                    <a class="hover:underline" href="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/s/<?php echo $_smarty_tpl->tpl_vars['subsite']->value["ShortRoute"];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['subsite']->value["Name"];?>
 →
                    </a>
                    <?php } else { ?>
                    <a class="hover:underline" href="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/u/<?php echo $_smarty_tpl->tpl_vars['user']->value["Username"];?>
/<?php echo $_smarty_tpl->tpl_vars['subsite']->value["Route"];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['subsite']->value["Name"];?>
 →
                    </a>
                    <?php }?>
                </h2>
                <div class="block md:inline-block">
                    <?php if ($_smarty_tpl->tpl_vars['isVisitingAccountPage']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Edit",'type'=>"primary",'route'=>"/edit/s/".((string)$_smarty_tpl->tpl_vars['subsite']->value["SubSiteId"])), 0, true);
?>
                        <form class="inline-block" method="POST" enctype="multipart/form-data" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/delete/s/<?php echo $_smarty_tpl->tpl_vars['subsite']->value['SubSiteId'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Delete",'type'=>"warn"), 0, true);
?>
                        </form>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['isVisitingAccountPage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Create new subsite",'type'=>"primary",'route'=>"/create/subsite"), 0, true);
?>
    <?php }?>
</div><?php }
}
