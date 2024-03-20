<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:00:09
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\callout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f72fa9219e99_82479010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01dcd7e9bbc49c19a72f662a8a913b29634b6318' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\callout.tpl',
      1 => 1710698409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f72fa9219e99_82479010 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['fixed']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('fixed', false);
}?>

<?php if ($_smarty_tpl->tpl_vars['fixed']->value) {?>
    <p class="backdrop-blur-lg bg-calloutbg p-3 px-6 pr-8 rounded-2xl text-gray-100 shadow-lg">
        <span class="text-lg text-white">💡</span> <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </p>
<?php } else { ?>
    <div class="group">
        <div class="p-3 hover:cursor-pointer">
            <span class="text-lg text-white">💡</span>
        </div>
        <div class="backdrop-blur-lg z-10 hidden group-hover:block group-hover:absolute bg-calloutbg p-3 px-6 rounded-2xl shadow-2xl text-gray-100">
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

        </div>
    </div>
<?php }
}
}
