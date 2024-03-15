<?php
/* Smarty version 4.4.1, created on 2024-03-15 21:26:54
  from 'C:\xampp\htdocs\Mosaic\src\templates\notfound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4af0ed090e9_95346871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308f49e41e31a42626c6b8fb2e777d8f64533d0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\notfound.tpl',
      1 => 1710534305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4af0ed090e9_95346871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141434360365f4af0ed04420_29481900', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_141434360365f4af0ed04420_29481900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_141434360365f4af0ed04420_29481900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="flex justify-center">
    <div class="">
        <p class="text text-neutral-400 uppercase">
            <?php echo $_smarty_tpl->tpl_vars['errorTitle']->value;?>

        </p>
        <h1 class="text-2xl md:text-3xl font-semibold">
            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['Error']->value, ENT_QUOTES, 'UTF-8', true);?>

        </h1>
    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
