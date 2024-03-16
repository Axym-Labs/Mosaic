<?php
/* Smarty version 4.4.1, created on 2024-03-16 13:04:56
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\submitbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f58ae87f74c9_87043358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce9e9e8d88af2ba4d2515078de117e147a31b755' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\submitbutton.tpl',
      1 => 1710590317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f58ae87f74c9_87043358 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['text']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('text', "Submit");
}
if (!(isset($_smarty_tpl->tpl_vars['type']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('type', "primary");
}?>

<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
" class="hover:cursor-pointer rounded-xl p-2 px-4 m-2 md:m-2 text-b700 text-sm text-white shadow-lg transition duration-500 ease-in-out mr-3 hover:shadow-lg hover:shadow-hover:shadow-<?php if ($_smarty_tpl->tpl_vars['type']->value == "primary") {?>primarySoft bg-primary<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "secondary") {?>secondarySoft bg-secondary<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "soft") {?>neutral-800 bg-neutral-800<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "warn") {?>red-900 bg-red-700<?php }?>"><?php }
}
