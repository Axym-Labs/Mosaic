<?php
/* Smarty version 4.4.1, created on 2024-03-17 20:11:52
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\projectinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f740781d0a34_85316204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b450f34492e4199abff9dd11c7e3ead1ce47725' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\projectinfo.tpl',
      1 => 1710702707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f740781d0a34_85316204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class=" p-4 rounded-md">
    <div class="mb-4">
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Title"];?>

        </h1>
        <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["LogoBlob"]) {?>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['fragmentContent']->value['LogoBlob']);?>
" alt="Logo" class="mb-2 rounded-lg">
        <?php }?>
        <p class="text-lg"><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Description"];?>
</p>
    </div>
    <div class="mb-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['CtaLink'];?>
" class="text-blue-500 hover:underline ml-1" target="_blank" rel="noopener noreferrer"><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["CtaLinkDescription"];?>
</a>
    </div>
</div>
<?php }
}
