<?php
/* Smarty version 4.4.1, created on 2024-03-06 17:18:00
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\linkbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65e89738d797f3_76605966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f8930e045bfe65af6bbe1f47d7bae4b7a419ad8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\linkbutton.tpl',
      1 => 1709741879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e89738d797f3_76605966 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="primary-button" href="<?php echo BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" class="rounded-xl p-2 px-4 m-2 md:m-2 text-b700 text-base text-white shadow-lg transition duration-500 ease-in-out mr-3 hover:shadow-lg hover:shadow-<?php if ($_smarty_tpl->tpl_vars['type']->value == "primary") {?>primarySoft bg-primary<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "secondary") {?>secondarySoft bg-secondary<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "soft") {?>neutral-800 bg-neutral-800<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "warn") {?>red-900 bg-red-700<?php }?>">
    Get Started
</a><?php }
}
