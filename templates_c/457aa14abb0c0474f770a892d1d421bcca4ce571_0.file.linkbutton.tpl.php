<?php
/* Smarty version 4.4.1, created on 2024-03-17 00:10:36
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\linkbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f626ec149861_20032083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457aa14abb0c0474f770a892d1d421bcca4ce571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\linkbutton.tpl',
      1 => 1710630610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f626ec149861_20032083 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['type']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('type', "primary");
}?>

<a id="primary-button" 
    href="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" 
    class="inline-block font-extrabold p-1.5 px-3 md:px-4 m-1.5 md:m-3 shadow-lg transition duration-500 ease-in-out mr-3 hover:shadow-lg text-black text-extrabold 
    bg-<?php if ($_smarty_tpl->tpl_vars['type']->value == "primary") {?>primary border-2 border-primary text-b600<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "secondary") {?>secondary border-2 border-secondary<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "soft") {?>neutral-900 border-2 border-neutral-700<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "warn") {?>warnSoft border-2 border-warn<?php }?>">
    <p class="">
        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </p>
</a><?php }
}
