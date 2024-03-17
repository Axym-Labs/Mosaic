<?php
/* Smarty version 4.4.1, created on 2024-03-08 12:45:41
  from 'C:\xampp\htdocs\Mosaic\src\templates\account\userProfileWrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eafa6525a632_52136603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d00e86d5a93efe1d8daf96bb93ae6dcd0312dec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\account\\userProfileWrapper.tpl',
      1 => 1709898340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eafa6525a632_52136603 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['isVisitingAccountPage']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('isVisitingAccountPage', false);
}?>

<div>
    <h1 class="text-3xl md:text-4xl font-extrabold intertight"><?php echo $_smarty_tpl->tpl_vars['user']->value["Username"];?>
</h1>
</div>

<div>
    <?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['userColumnTypeData']->value);?>

</div><?php }
}
