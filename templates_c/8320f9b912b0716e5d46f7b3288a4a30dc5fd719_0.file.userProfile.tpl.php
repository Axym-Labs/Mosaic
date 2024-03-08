<?php
/* Smarty version 4.4.1, created on 2024-03-08 12:47:50
  from 'C:\xampp\htdocs\Mosaic\src\templates\user\userProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eafae6a21f16_57441856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8320f9b912b0716e5d46f7b3288a4a30dc5fd719' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user\\userProfile.tpl',
      1 => 1709898340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eafae6a21f16_57441856 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['canEdit']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('canEdit', false);
}?>

<div>
    <h1 class="text-3xl md:text-4xl font-extrabold intertight"><?php echo $_smarty_tpl->tpl_vars['user']->value["Username"];?>
</h1>
</div>

<div>
    <?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['userColumnTypeData']->value);?>

</div><?php }
}
