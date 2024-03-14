<?php
/* Smarty version 4.4.1, created on 2024-03-14 23:19:05
  from 'C:\xampp\htdocs\Mosaic\src\templates\larger_components\subsiteView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f377d9395dc7_64486872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1329d84c13cf96bf58cfca92f3b56647775227' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\larger_components\\subsiteView.tpl',
      1 => 1710454704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f377d9395dc7_64486872 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fragments']->value, 'fragment');
$_smarty_tpl->tpl_vars['fragment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fragment']->value) {
$_smarty_tpl->tpl_vars['fragment']->do_else = false;
?>
    <div class="p-4 border-2 border-primary m-4 rounded-xl">
        <?php echo $_smarty_tpl->tpl_vars['fragment']->value;?>

    </div>
<?php
}
if ($_smarty_tpl->tpl_vars['fragment']->do_else) {
?>
<div>
    <h1>
        Nothing here yet.
    </h1>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
