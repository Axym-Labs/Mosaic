<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:40:35
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\input\input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f739230e4104_50934264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a3c4de9cfb7f913a9171a61e53edddadf555101' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\input\\input.tpl',
      1 => 1710700834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f739230e4104_50934264 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['required']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('required', false);
}
if (!(isset($_smarty_tpl->tpl_vars['type']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('type', "text");
}
if (!(isset($_smarty_tpl->tpl_vars['otherAttributes']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('otherAttributes', '');
}
if (!(isset($_smarty_tpl->tpl_vars['class']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('class', '');
}
if (!(isset($_smarty_tpl->tpl_vars['value']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('value', '');
}?>

<input 
    class="text-lg text-white p-2 m-1.5 px-6 bg-gray-800 <?php if ($_smarty_tpl->tpl_vars['type']->value != 'file') {?>rounded-full<?php } else { ?>rounded-xl pr-12<?php }?> w-64 focus:bg-primarySoft transform transition duration-500 ease-in-out
    file:ml-0 file:uppercase file:text-sm file:font-bold file:px-12 file:py-12 file:pl-6 file:my-2 file:mr-6 file:pr-14 file:rounded-xl file:border-0 hover:file:cursor-pointer file:bg-transparent file:text-primary hover:file:bg-primarySoft file:transform file:transition file:duration-500 file:ease-in-out
    <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
    type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" 
    <?php if ((isset($_smarty_tpl->tpl_vars['placeholder']->value))) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
"<?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?> 
    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 
    <?php echo $_smarty_tpl->tpl_vars['otherAttributes']->value;?>
><?php }
}
