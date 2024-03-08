<?php
/* Smarty version 4.4.1, created on 2024-03-08 12:43:54
  from 'C:\xampp\htdocs\Mosaic\src\templates\notfound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eaf9faefe1c8_61781093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308f49e41e31a42626c6b8fb2e777d8f64533d0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\notfound.tpl',
      1 => 1709898234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eaf9faefe1c8_61781093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78411159365eaf9faef3f38_96173123', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_78411159365eaf9faef3f38_96173123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_78411159365eaf9faef3f38_96173123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="flex justify-center items-center flex-col">
    <p class="text text-neutral-400 uppercase">
        404 Not Found
    </p>
    <h1 class="text-2xl md:text-3xl font-semibold">
        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['NotFoundError']->value, ENT_QUOTES, 'UTF-8', true);?>

    </h1>
</div>

<?php
}
}
/* {/block 'content'} */
}
