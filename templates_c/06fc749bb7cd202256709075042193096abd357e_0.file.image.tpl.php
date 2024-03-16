<?php
/* Smarty version 4.4.1, created on 2024-03-16 22:47:54
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6138ad0fb80_60990445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06fc749bb7cd202256709075042193096abd357e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\image.tpl',
      1 => 1710597071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6138ad0fb80_60990445 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class=" p-4 rounded-md">
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["ImageContent"]) {?>
        <div class="mb-4">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['fragmentContent']->value['ImageContent']);?>
" alt="Image" class="max-w-full h-auto rounded-lg">
        </div>
    <?php }?>
    <div class="mb-4">
        <p><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Description"];?>
</p>
    </div>
</div>
<?php }
}
