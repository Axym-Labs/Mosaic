<?php
/* Smarty version 4.4.1, created on 2024-03-17 15:38:41
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f700710c7902_45311724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7a1f656452a75ecc05f71afae85277fc6f24025' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\iframe.tpl',
      1 => 1710533357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f700710c7902_45311724 (Smarty_Internal_Template $_smarty_tpl) {
?>
<iframe class=" p-4 rounded-md" src="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['Url'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['Width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['Height'];?>
"
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value['MorePermissions']) {?> scrolling="yes" allowpopups="true" allowscripting="true"<?php } else { ?> scrolling="no" allowpopups="false" allowscripting="false"<?php }?>>
    Your browser does not support iframes.
</iframe>
<?php }
}
