<?php
/* Smarty version 4.4.1, created on 2024-03-17 18:42:58
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\input\label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f72ba26f6898_12835679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '512d26ae08125e05f938fa847b154c95d005f56c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\input\\label.tpl',
      1 => 1710697377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f72ba26f6898_12835679 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['text']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['for']->value);
}
if (!(isset($_smarty_tpl->tpl_vars['required']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('required', false);
}?>

<label for="<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
" class="uppercase text-sm font-extrabold"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
        <span class="text-warn">*</span>
    <?php }?>
</label><?php }
}
