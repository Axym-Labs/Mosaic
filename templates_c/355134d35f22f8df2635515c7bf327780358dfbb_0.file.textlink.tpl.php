<?php
/* Smarty version 4.4.1, created on 2024-03-06 18:00:39
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\textlink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65e8a13714b9b6_19758231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '355134d35f22f8df2635515c7bf327780358dfbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\textlink.tpl',
      1 => 1709744438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8a13714b9b6_19758231 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" class="underline underline-offset-2 transition ease-in-out duration-400 hover:text-primaryLight underline-offset-2 whitespace-nowrap">
    <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

</a><?php }
}
