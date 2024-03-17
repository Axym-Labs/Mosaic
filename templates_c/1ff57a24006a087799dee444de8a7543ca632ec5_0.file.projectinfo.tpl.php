<?php
/* Smarty version 4.4.1, created on 2024-03-17 20:27:11
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\projectinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f7440f749e62_90867046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff57a24006a087799dee444de8a7543ca632ec5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\projectinfo.tpl',
      1 => 1710702931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f7440f749e62_90867046 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <label for="fragment-FragmentProjectinfo-Title">Title:</label>
    <input type="text" id="fragment-FragmentProjectinfo-Title" name="fragment-FragmentProjectinfo-Title" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'Title');
}?>>
</div>

<div>
    <label for="fragment-FragmentProjectinfo-Description">Description:</label>
    <textarea id="fragment-FragmentProjectinfo-Description" name="fragment-FragmentProjectinfo-Description"><?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['fragmentContent']->value,'Description');
}?></textarea>
</div>

<div>
    <label for="LogoBlob">Logo:</label>
    <input type="file" id="fragment-FragmentImage-LogoBlob" name="fragment-FragmentImage-LogoBlob" accept=".jpg, .jpeg">
    <?php if ((isset($_smarty_tpl->tpl_vars['fragmentContent']->value["LogoBlob"]))) {?>
        <img src="data:image/jpeg;base64,<?php echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['fragmentContent']->value,'LogoBlob','img');?>
" alt="Logo" class="mb-2 rounded-lg">
    <?php }?>
</div>

<div>
    <label for="fragment-FragmentProjectinfo-CtaLink">CtaLink:</label>
    <input type="text" id="fragment-FragmentProjectinfo-CtaLink" name="fragment-FragmentProjectinfo-CtaLink" required <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'CtaLink');
}?>>
</div>

<div>
    <label for="fragment-FragmentProjectinfo-CtaLinkDescription">CtaLinkDescription:</label>
    <input type="text" id="fragment-FragmentProjectinfo-CtaLinkDescription" name="fragment-FragmentProjectinfo-CtaLinkDescription" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'CtaLinkDescription');
}?>>
</div>
<?php }
}
