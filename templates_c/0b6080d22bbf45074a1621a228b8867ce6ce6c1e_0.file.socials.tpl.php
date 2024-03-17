<?php
/* Smarty version 4.4.1, created on 2024-03-17 13:50:50
  from 'C:\xampp\htdocs\Mosaic\src\templates\editFragments\socials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6e72a147619_22629988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6080d22bbf45074a1621a228b8867ce6ce6c1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\editFragments\\socials.tpl',
      1 => 1710679796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6e72a147619_22629988 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <label for="fragment-FragmentSocials-GithubLink">Github Link:</label>
    <input type="text" id="fragment-FragmentSocials-GithubLink" name="fragment-FragmentSocials-GithubLink" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'GithubLink');
}?>>
</div>

<div>
    <label for="fragment-FragmentSocials-GitlabLink">Gitlab Link:</label>
    <input type="text" id="fragment-FragmentSocials-GitlabLink" name="fragment-FragmentSocials-GitlabLink" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'GitlabLink');
}?>>
</div>

<div>
    <label for="fragment-FragmentSocials-XLink">X Link:</label>
    <input type="text" id="fragment-FragmentSocials-XLink" name="fragment-FragmentSocials-XLink" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'XLink');
}?>>
</div>

<div>
    <label for="fragment-FragmentSocials-FacebookLink">Facebook Link:</label>
    <input type="text" id="fragment-FragmentSocials-FacebookLink" name="fragment-FragmentSocials-FacebookLink" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'FacebookLink');
}?>>
</div>

<div>
    <label for="fragment-FragmentSocials-RedditLink">Reddit Link:</label>
    <input type="text" id="fragment-FragmentSocials-RedditLink" name="fragment-FragmentSocials-RedditLink" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'RedditLink');
}?>>
</div>

<div>
    <label for="fragment-FragmentSocials-DiscordLink">Discord Link:</label>
    <input type="text" id="fragment-FragmentSocials-DiscordLink" name="fragment-FragmentSocials-DiscordLink" <?php if (((isset($_smarty_tpl->tpl_vars['fragmentContent']->value)))) {
echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['fragmentContent']->value,'DiscordLink');
}?>>
</div><?php }
}
