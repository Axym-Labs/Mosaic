<?php
/* Smarty version 4.4.1, created on 2024-03-17 15:02:33
  from 'C:\xampp\htdocs\Mosaic\src\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6f7f90c9413_01431683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279ab27ba31d83f2e8517fa5884190e8dda1b574' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user.tpl',
      1 => 1710684130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/editUserComponent.tpl' => 1,
    'file:user/userProfileWrapper.tpl' => 1,
    'file:components/linkbutton.tpl' => 2,
    'file:user/subsiteList.tpl' => 1,
  ),
),false)) {
function content_65f6f7f90c9413_01431683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28807304965f6f7f90c1318_88331204', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_28807304965f6f7f90c1318_88331204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_28807304965f6f7f90c1318_88331204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['isVisitingAccountPage']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('isVisitingAccountPage', false);
}
if (!(isset($_smarty_tpl->tpl_vars['isThisUser']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('isThisUser', false);
}?>

<?php if ($_smarty_tpl->tpl_vars['isVisitingAccountPage']->value) {?>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:user/editUserComponent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('userSubmitText'=>"Update user",'userIsUpdate'=>true), 0, false);
?>
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:user/userProfileWrapper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['isVisitingAccountPage']->value) {?>
    <div class="flex justify-end">
        <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Logout",'type'=>"warn",'route'=>"/create/subsite"), 0, false);
?>
    </div>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['isThisUser']->value) {?>
        <div class="flex justify-center">
            <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Manage your profile",'type'=>"primary",'route'=>"/a"), 0, true);
?>
        </div>
    <?php }
}?>

<?php $_smarty_tpl->_subTemplateRender('file:user/subsiteList.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
