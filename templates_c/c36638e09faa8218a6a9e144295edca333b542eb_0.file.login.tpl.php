<?php
/* Smarty version 4.4.1, created on 2024-03-12 11:54:29
  from 'C:\xampp\htdocs\Mosaic\src\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f03465802942_59817121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36638e09faa8218a6a9e144295edca333b542eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\login.tpl',
      1 => 1710240817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f03465802942_59817121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177789561265f034657ff4a1_49060135', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_177789561265f034657ff4a1_49060135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_177789561265f034657ff4a1_49060135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div>
    <form action="<?php echo BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX;?>
/login">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
</div>

<?php
}
}
/* {/block 'content'} */
}
