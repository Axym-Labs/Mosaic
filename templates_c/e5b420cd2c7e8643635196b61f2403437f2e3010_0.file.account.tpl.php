<?php
/* Smarty version 4.4.1, created on 2024-03-08 10:46:07
  from 'C:\xampp\htdocs\Mosaic\src\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eade5f629776_60091217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5b420cd2c7e8643635196b61f2403437f2e3010' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user.tpl',
      1 => 1709891031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eade5f629776_60091217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59679408965eade5f624e95_92669207', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_59679408965eade5f624e95_92669207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59679408965eade5f624e95_92669207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo (($tmp = $_smarty_tpl->tpl_vars['canEdit']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp);?>


<div>
    <h1><?php echo $_smarty_tpl->tpl_vars['user']->value->UserName;?>
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
