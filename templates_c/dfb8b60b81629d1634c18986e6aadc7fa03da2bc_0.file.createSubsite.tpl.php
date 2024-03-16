<?php
/* Smarty version 4.4.1, created on 2024-03-16 13:08:09
  from 'C:\xampp\htdocs\Mosaic\src\templates\createSubsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f58ba995ff23_58122244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfb8b60b81629d1634c18986e6aadc7fa03da2bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\createSubsite.tpl',
      1 => 1710590889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f58ba995ff23_58122244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131168066065f58ba995a3a4_36626460', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_131168066065f58ba995a3a4_36626460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_131168066065f58ba995a3a4_36626460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form method="POST" enctype="multipart/form-data" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/create/subsite">
    <div>
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" maxlength="50" placeholder="My new subsite">
    </div>
    <div>
        <label for="Route">Route:</label>
        <input type="text" id="Route" name="Route" maxlength="50" placeholder="Enter Route">
    </div>

    <?php if ($_smarty_tpl->tpl_vars['planPerm']->value["ShortLinkOption"]) {?>
        <div>
            <label for="ShortRoute">Short Route:</label>
            <input type="text" id="ShortRoute" name="ShortRoute" maxlength="50" placeholder="Enter Short Route">
        </div>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Create new subsite",'type'=>"primary"), 0, false);
?>
</form>

<?php
}
}
/* {/block 'content'} */
}
