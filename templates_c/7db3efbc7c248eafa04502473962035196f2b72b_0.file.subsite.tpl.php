<?php
/* Smarty version 4.4.1, created on 2024-03-08 14:22:09
  from 'C:\xampp\htdocs\Mosaic\src\templates\subsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eb1101b263d4_33289573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db3efbc7c248eafa04502473962035196f2b72b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\subsite.tpl',
      1 => 1709904129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eb1101b263d4_33289573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59375717265eb1101b1e6e8_46614763', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_59375717265eb1101b1e6e8_46614763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59375717265eb1101b1e6e8_46614763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<br>
<br>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fragments']->value, 'fragment');
$_smarty_tpl->tpl_vars['fragment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fragment']->value) {
$_smarty_tpl->tpl_vars['fragment']->do_else = false;
?>
    <div class="p-4 border-2 border-primary m-4 rounded-xl">
        <?php echo $_smarty_tpl->tpl_vars['fragment']->value;?>

    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<br>
<br>

<h1>Data</h1>
<?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['subsite']->value,$_smarty_tpl->tpl_vars['subsiteColumnTypeData']->value);?>


<?php
}
}
/* {/block 'content'} */
}
