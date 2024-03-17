<?php
/* Smarty version 4.4.1, created on 2024-03-17 15:43:07
  from 'C:\xampp\htdocs\Mosaic\src\templates\base\nav\loggedinUserHeaderContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f7017be277f3_67805214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3072d42691dde7bc94a28395b2b1db26a2464ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\base\\nav\\loggedinUserHeaderContents.tpl',
      1 => 1710686587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/navlink.tpl' => 1,
    'file:components/linkbutton.tpl' => 1,
  ),
),false)) {
function content_65f7017be277f3_67805214 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="welcome-msg" class="mx-4 text-b500 text-lg text-gray-100">
    Welcome, <?php echo $_smarty_tpl->tpl_vars['maybeUsername']->value;?>
!
</div>
<?php $_smarty_tpl->_subTemplateRender("file:components/navlink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Pricing",'route'=>"/pricing"), 0, false);
$_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"My Account",'route'=>"/a",'type'=>"primary"), 0, false);
}
}
