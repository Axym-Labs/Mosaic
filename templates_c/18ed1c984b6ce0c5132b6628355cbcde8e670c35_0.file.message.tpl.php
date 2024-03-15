<?php
/* Smarty version 4.4.1, created on 2024-03-15 22:13:30
  from 'C:\xampp\htdocs\Mosaic\src\templates\components\message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4b9faa9d0a5_30169916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ed1c984b6ce0c5132b6628355cbcde8e670c35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\components\\message.tpl',
      1 => 1710537097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4b9faa9d0a5_30169916 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="md:text-sm flex justify-between items-center rounded-md backdrop-blur-lg m-2 	
    bg-<?php if ($_smarty_tpl->tpl_vars['type']->value == "primary") {?>primarySoft border-2 border-primary text-b600<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "info") {?>secondarySoft border-2 border-secondary<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "info2") {?>neutral-900 border-2 border-neutral-700<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "warning") {?>warnSoft border-2 border-warn<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "error") {?>warnSoft border-2 border-warn<?php }?>">
    <p class="p-4">
        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>

    </p>
    <button class="inline-block p-4 px-6" onclick="this.parentElement.remove()">✔</button>
</div><?php }
}
