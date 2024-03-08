<?php
/* Smarty version 4.4.1, created on 2024-03-08 14:25:13
  from 'C:\xampp\htdocs\Mosaic\src\templates\base\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eb11b9a5ccf4_57212053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd65b2000fc43f1205b959b56e006476b588abd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\base\\footer.tpl',
      1 => 1709904311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/textlink.tpl' => 2,
  ),
),false)) {
function content_65eb11b9a5ccf4_57212053 (Smarty_Internal_Template $_smarty_tpl) {
?><footer id="footer" class="pt-6 mt-32">

    <div id="logo-wrapper" class="md:flex md:items-center justify-between mb-2" style="min-width: min(100vw, 1200px);">
        <div style="margin-left: 4vw">
            <a href="/">
                <img src="<?php echo BusinessConstants::$STATIC_URL_PREFIX;?>
/assets/logo.png" alt="PROJECT_NAME" class="w-12">
            </a>
        </div>
        <ul id="footer-info" class="md:flex justify-center flex-wrap mt-6 md:mt-0 mx-4 md:mx-0 text-gray-300">
            <li class="p-1.5 my-2 md:my-1 m-1">
                <?php $_smarty_tpl->_subTemplateRender("file:components/textlink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Start Page",'route'=>"/"), 0, false);
?>
            </li>
            <li class="p-1.5 my-2 md:my-1 m-1">
                <?php $_smarty_tpl->_subTemplateRender("file:components/textlink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"My Account",'route'=>"/a"), 0, true);
?>
            </li>
        </ul>
    </div>
    <div id="footer-bottom-info" class="mt-6">
        <p class="text-center text-gray-600">
            Copyright Mosaic
        </p>
    </div>            
</footer><?php }
}
