<?php
/* Smarty version 4.4.1, created on 2024-03-17 13:32:13
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6e2cdd36f85_66664949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '132ebfb8f466c9b98d4aa7467836b9c2d6901cf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\image.tpl',
      1 => 1710678733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6e2cdd36f85_66664949 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
  <label for="ImageContent">ImageContent:</label>
  <input type="file" id="fragment-FragmentImage-ImageContent" name="fragment-FragmentImage-ImageContent" accept=".jpg, .jpeg">
</div>

<div>
    <?php if (GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['fragmentContent']->value,'ImageContent') != '') {?>
        <img class="w-12 h-12 inline-block" src="data:image/jpeg;base64,<?php echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['fragmentContent']->value,'ImageContent','img');?>
" alt="Image content">
    <?php }?>
</div>

<div>
  <label for="Description">Description:</label>
  <textarea id="fragment-FragmentImage-Description" name="fragment-FragmentImage-Description"><?php echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['fragmentContent']->value,'Description');?>
</textarea>
</div><?php }
}
