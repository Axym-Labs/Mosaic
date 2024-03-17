<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:52:42
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f73bfac57d12_02145170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '710e676b21206e4240b6cc45b55668e70743be76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\link.tpl',
      1 => 1710533357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f73bfac57d12_02145170 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class=" p-4 rounded-md">
    <div class="mb-4">
        <a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['Link'];?>
" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer"><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Title"];?>
</a>
    </div>
</div>
<?php }
}
