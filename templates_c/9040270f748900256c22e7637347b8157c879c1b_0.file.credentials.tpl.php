<?php
/* Smarty version 4.4.1, created on 2024-03-08 14:30:05
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\credentials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eb12ddbe09b7_89762102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9040270f748900256c22e7637347b8157c879c1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\credentials.tpl',
      1 => 1709904605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eb12ddbe09b7_89762102 (Smarty_Internal_Template $_smarty_tpl) {
?>credentials

<?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['fragmentContent']->value,$_smarty_tpl->tpl_vars['fragmentColumnTypeData']->value);?>


<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["ShowPersonalData"];?>

<br>
<br>
<?php echo GenericRender::RenderDictAsText($_smarty_tpl->tpl_vars['extraFragmentContent']->value);
}
}
