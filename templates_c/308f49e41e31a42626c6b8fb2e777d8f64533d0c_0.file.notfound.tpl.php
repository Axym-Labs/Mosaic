<?php
/* Smarty version 4.4.1, created on 2024-03-14 22:39:27
  from 'C:\xampp\htdocs\Mosaic\src\templates\notfound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f36e8fc6fb62_29229923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308f49e41e31a42626c6b8fb2e777d8f64533d0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\notfound.tpl',
      1 => 1710451822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f36e8fc6fb62_29229923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58732150365f36e8fc69590_57161001', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_58732150365f36e8fc69590_57161001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_58732150365f36e8fc69590_57161001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="flex justify-center">
    <div class="">
        <p class="text text-neutral-400 uppercase">
            404 Not Found
        </p>
        <h1 class="text-2xl md:text-3xl font-semibold">
            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['NotFoundError']->value, ENT_QUOTES, 'UTF-8', true);?>

        </h1>
    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
