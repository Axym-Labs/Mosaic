<?php
/* Smarty version 4.4.1, created on 2024-03-06 17:37:17
  from 'C:\xampp\htdocs\Mosaic\src\templates\base\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65e89bbd6b83b8_54367763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '820829a637abc0f8ea61a57db05089cab2710b39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\base\\header.tpl',
      1 => 1709743036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/linkbutton.tpl' => 2,
  ),
),false)) {
function content_65e89bbd6b83b8_54367763 (Smarty_Internal_Template $_smarty_tpl) {
?><nav id="nav" class="sticky top-0">
    <div id="navbar-contents" class="flex" style="height: 62px;">
        <div id="navbar-logo" class="w-full md:w-1/5 lg:w-1/6 2xl:w-1/12 bg-bgcol flex justify-between md:justify-center items-center">
            <a href="/" class="flex items-center">
                <img src="<?php echo BusinessConstants::$STATIC_URL_PREFIX;?>
/assets/logo.png" alt="Mosaic" class="w-12 ml-4 md:ml-0">
                <p class="text-lg text-b500 p-4" >Mosaic</p>
            </a>
            <div id="toggle-mobile-nav" class="md:hidden">
                <button id="toggle-nav-mobile-btn" class="relative group" data-active="0" onclick="toggleNavMobile(this);">
                    <div class="relative rounded-full flex overflow-hidden items-center justify-center w-[50px] h-[50px] transform transition-all duration-200">
                        <div class="flex flex-col justify-between w-[20px] h-[18px] transform transition-all duration-300 origin-center overflow-hidden">
                            <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10"></div>
                            <div class="bg-white h-[2px] w-7 rounded transform transition-all duration-300 group-focus:translate-x-10 delay-75"></div>
                            <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10 delay-150"></div>
                
                            <div class="absolute items-center justify-between transform transition-all duration-500 top-2.5 -translate-x-10 group-focus:translate-x-0 flex w-0 group-focus:w-12">
                            <div class="absolute bg-white h-[2px] w-5 transform transition-all duration-500 rotate-0 delay-300 group-focus:rotate-45"></div>
                            <div class="absolute bg-white h-[2px] w-5 transform transition-all duration-500 -rotate-0 delay-300 group-focus:-rotate-45"></div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div id="navbar-links" class="bg-bgcol backdrop-blur-md absolute md:relative md:top-0 w-full md:w-auto md:block hidden md:grow mr-2">
            <div class="flex flex-col md:flex-row justify-end h-full items-center bg-bgcol">
                <?php if ($_smarty_tpl->tpl_vars['sessionManager']->value->IsUserLoggedIn()) {?>
                    <div id="welcome-msg" class="flex flex-col justify-center mx-4 text-b500 text-lg">
                        Welcome, <?php echo $_smarty_tpl->tpl_vars['maybeUsername']->value;?>
!
                    </div>
                    <a id="primary-button" href="<?php echo BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX;?>
/a" class="rounded-xl p-2 px-4 m-2 md:m-2 text-b700 text-base text-white shadow-lg transition duration-100 ease-in-out mr-3">
                        My Account
                    </a>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Get Started",'route'=>"/create/account",'type'=>"primary"), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:components/linkbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Login",'route'=>"/login",'type'=>"secondary"), 0, true);
?>
                <?php }?>
            </div>
        </div>
    </div>

</nav>
<div class="mb-12"></div><?php }
}
