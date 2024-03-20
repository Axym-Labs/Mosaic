<?php
/* Smarty version 4.4.1, created on 2024-03-17 20:51:11
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\socials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f749af038ba6_29120579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098adc02bd6f5ec9f5fdbb4150d594a04af2adfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\socials.tpl',
      1 => 1710705070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f749af038ba6_29120579 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class=" p-4 rounded-md">
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["GithubLink"] && $_smarty_tpl->tpl_vars['fragmentContent']->value["GithubLink"] != "NULL") {?>
        <div class="mb-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['GithubLink'];?>
" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Github</a>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["GitlabLink"] && $_smarty_tpl->tpl_vars['fragmentContent']->value["GitlabLink"] != "NULL") {?>
        <div class="mb-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['GitlabLink'];?>
" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Gitlab</a>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["XLink"] && $_smarty_tpl->tpl_vars['fragmentContent']->value["XLink"] != "NULL") {?>
        <div class="mb-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['XLink'];?>
" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">X</a>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["FacebookLink"] && $_smarty_tpl->tpl_vars['fragmentContent']->value["FacebookLink"] != "NULL") {?>
        <div class="mb-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['FacebookLink'];?>
" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Facebook</a>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["RedditLink"] && $_smarty_tpl->tpl_vars['fragmentContent']->value["RedditLink"] != "NULL") {?>
        <div class="mb-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['RedditLink'];?>
" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Reddit</a>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["DiscordLink"] && $_smarty_tpl->tpl_vars['fragmentContent']->value["DiscordLink"] != "NULL") {?>
        <div class="mb-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['DiscordLink'];?>
" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Discord</a>
        </div>
    <?php }?>
</div>
<?php }
}
