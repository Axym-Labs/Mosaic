<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:33:19
  from 'C:\xampp\htdocs\Mosaic\src\templates\subsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f7376f2884a2_55606767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db3efbc7c248eafa04502473962035196f2b72b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\subsite.tpl',
      1 => 1710700398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site_components/subsiteView.tpl' => 1,
    'file:components/textlink.tpl' => 1,
    'file:components/linkbutton.tpl' => 1,
  ),
),false)) {
function content_65f7376f2884a2_55606767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('subsiteNav', true);
$_smarty_tpl->_assignInScope('withFooter', false);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104982371065f7376f280079_92399408', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_104982371065f7376f280079_92399408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_104982371065f7376f280079_92399408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:site_components/subsiteView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="h-32 w-full flex justify-center mt-16 md:mt-32">
    <div class="">
        <p class="text-center">
            This subsite was created by <?php echo ucfirst($_smarty_tpl->tpl_vars['owner']->value["FirstName"]);?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['owner']->value["LastName"]);?>
.
            <br>
            <?php $_smarty_tpl->_subTemplateRender("file:components/textlink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Create your own subsite with Mosaic →",'route'=>"/create/user",'class'=>"font-bold"), 0, false);
?>
        </p>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['isOwner']->value) {?>
    <?php $_smarty_tpl->_assignInScope('subsiteId', $_smarty_tpl->tpl_vars['subsite']->value['SubSiteId']);?>
    <div class="flex justify-center">
        <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Edit your subsite",'route'=>"/edit/s/".((string)$_smarty_tpl->tpl_vars['subsiteId']->value),'type'=>"primary"), 0, false);
?>
    </div>
<?php }?>

<!-- <div class="">
    <div class="max-w-md p-6 bg-highlightedbg rounded-xl shadow-lg">
        <div>
            <p class="text-lg font-bold mb-4">Page Information</p>
            <div class="flex justify-between mb-2">
                <p>Name:</p>
                <p><?php echo $_smarty_tpl->tpl_vars['subsite']->value["Name"];?>
</p>
            </div>
            <div class="flex justify-between mb-2">
                <p>Route:</p>
                <p><?php echo $_smarty_tpl->tpl_vars['subsite']->value["Route"];?>
</p>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['subsite']->value["ShortRoute"] != '') {?>
            <div class="flex justify-between mb-2">
                <p>ShortRoute:</p>
                <p><?php echo $_smarty_tpl->tpl_vars['subsite']->value["ShortRoute"];?>
</p>
            </div>
            <?php }?>
        </div>
    </div>
</div> -->



<?php
}
}
/* {/block 'content'} */
}
