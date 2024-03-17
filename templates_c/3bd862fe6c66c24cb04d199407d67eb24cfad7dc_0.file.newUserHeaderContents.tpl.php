<?php
/* Smarty version 4.4.1, created on 2024-03-17 16:19:43
  from 'C:\xampp\htdocs\Mosaic\src\templates\base\nav\newUserHeaderContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f70a0f1a3bb8_10584751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bd862fe6c66c24cb04d199407d67eb24cfad7dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\base\\nav\\newUserHeaderContents.tpl',
      1 => 1710688683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/navlink.tpl' => 1,
    'file:components/linkbutton.tpl' => 2,
  ),
),false)) {
function content_65f70a0f1a3bb8_10584751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:components/navlink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Pricing",'route'=>"/pricing"), 0, false);
$_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Get Started",'route'=>"/create/user",'type'=>"primary"), 0, false);
$_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Login",'route'=>"/login",'type'=>"secondary"), 0, true);
}
}
