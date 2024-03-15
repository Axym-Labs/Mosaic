<?php
/* Smarty version 4.4.1, created on 2024-03-15 01:19:03
  from 'C:\xampp\htdocs\Mosaic\src\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f393f756e7c4_15424005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36638e09faa8218a6a9e144295edca333b542eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\login.tpl',
      1 => 1710461941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f393f756e7c4_15424005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182543007065f393f756caf7_47750116', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_182543007065f393f756caf7_47750116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_182543007065f393f756caf7_47750116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div>
    <form action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/login" method="POST">
        <input type="text" name="Email" id="Email" placeholder="Email">
        <input type="password" name="Password" id="Password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
</div>

<?php
}
}
/* {/block 'content'} */
}
