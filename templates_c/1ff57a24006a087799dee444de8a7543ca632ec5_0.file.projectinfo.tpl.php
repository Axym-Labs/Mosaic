<?php
/* Smarty version 4.4.1, created on 2024-03-16 17:36:22
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\projectinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f5ca86a2fce1_95739150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff57a24006a087799dee444de8a7543ca632ec5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\projectinfo.tpl',
      1 => 1710601987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f5ca86a2fce1_95739150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <label for="fragment-FragmentProjectinfo-Title">Title:</label>
    <input type="text" id="fragment-FragmentProjectinfo-Title" name="fragment-FragmentProjectinfo-Title">
</div>

<div>
    <label for="fragment-FragmentProjectinfo-Description">Description:</label>
    <textarea id="fragment-FragmentProjectinfo-Description" name="fragment-FragmentProjectinfo-Description"></textarea>
</div>

<div>
    <label for="LogoBlob">Logo:</label>
    <input type="file" id="fragment-FragmentImage-LogoBlob" name="fragment-FragmentImage-LogoBlob" accept=".jpg, .jpeg">
  </div>

<div>
    <label for="fragment-FragmentProjectinfo-CtaLink">CtaLink:</label>
    <input type="text" id="fragment-FragmentProjectinfo-CtaLink" name="fragment-FragmentProjectinfo-CtaLink" required>
</div>

<div>
    <label for="fragment-FragmentProjectinfo-CtaLinkDescription">CtaLinkDescription:</label>
    <input type="text" id="fragment-FragmentProjectinfo-CtaLinkDescription" name="fragment-FragmentProjectinfo-CtaLinkDescription">
</div>
<?php }
}
