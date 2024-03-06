<?php
/* Smarty version 4.4.1, created on 2024-03-06 18:02:07
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\linkbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65e8a18fba5fd1_14695584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457aa14abb0c0474f770a892d1d421bcca4ce571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\linkbutton.tpl',
      1 => 1709744527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8a18fba5fd1_14695584 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="primary-button" 
    href="<?php echo BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" 
    class="inline-block rounded-full p-2 px-6 m-2 md:m-2 text-sm text-white shadow-lg transition duration-500 ease-in-out mr-3 hover:shadow-lg 
    backdrop-opacity-50 hover:backdrop-opacity-60
    hover:bg-<?php if ($_smarty_tpl->tpl_vars['type']->value == "primary") {?>primarySoft border-2 border-primary text-b600<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "secondary") {?>secondarySoft border-2 border-secondary<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "soft") {?>neutral-900 border-2 border-neutral-700<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "warn") {?>warnSoft border-2 border-warn<?php }?>">
    <p class="text-white">
        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </p>
</a><?php }
}
