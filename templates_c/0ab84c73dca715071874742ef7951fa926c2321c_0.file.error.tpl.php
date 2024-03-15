<?php
/* Smarty version 4.4.1, created on 2024-03-15 21:42:41
  from 'C:\xampp\htdocs\Mosaic\src\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4b2c109bd78_68339423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab84c73dca715071874742ef7951fa926c2321c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\error.tpl',
      1 => 1710535350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/linkbutton.tpl' => 1,
  ),
),false)) {
function content_65f4b2c109bd78_68339423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211274808865f4b2c1097494_09469170', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_211274808865f4b2c1097494_09469170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_211274808865f4b2c1097494_09469170',
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
            <?php echo $_smarty_tpl->tpl_vars['Error']->value;?>

        </h1>
        <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Back to home",'route'=>"/",'type'=>"primary"), 0, false);
?>
    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
