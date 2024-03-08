<?php
/* Smarty version 4.4.1, created on 2024-03-08 10:54:13
  from 'C:\xampp\htdocs\Mosaic\src\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eae045a29184_10630358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279ab27ba31d83f2e8517fa5884190e8dda1b574' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user.tpl',
      1 => 1709891652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eae045a29184_10630358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181200188265eae045a1fdb3_48420515', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_181200188265eae045a1fdb3_48420515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_181200188265eae045a1fdb3_48420515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo (($tmp = $_smarty_tpl->tpl_vars['canEdit']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp);?>


<div>
    <h1><?php echo $_smarty_tpl->tpl_vars['user']->value["Username"];?>
</h1>
</div>

<div>
    <?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['user']->value);?>

</div>


<?php
}
}
/* {/block 'content'} */
}
