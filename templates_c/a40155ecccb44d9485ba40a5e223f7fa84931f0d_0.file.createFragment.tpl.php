<?php
/* Smarty version 4.4.1, created on 2024-03-17 13:46:56
  from 'C:\xampp\htdocs\Mosaic\src\templates\createFragment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6e640b36194_12737216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a40155ecccb44d9485ba40a5e223f7fa84931f0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\createFragment.tpl',
      1 => 1710679616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:fragment_components/createContentFragment.tpl' => 1,
    'file:editFragments/credentials.tpl' => 1,
    'file:editFragments/iframe.tpl' => 1,
    'file:editFragments/image.tpl' => 1,
    'file:editFragments/link.tpl' => 1,
    'file:editFragments/news.tpl' => 1,
    'file:editFragments/projectinfo.tpl' => 1,
    'file:editFragments/socials.tpl' => 1,
    'file:editFragments/text.tpl' => 1,
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f6e640b36194_12737216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12393290065f6e640b30263_37760527', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_12393290065f6e640b30263_37760527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12393290065f6e640b30263_37760527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form method="POST" enctype="multipart/form-data" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/edit/s/<?php echo $_smarty_tpl->tpl_vars['subsiteId']->value;?>
/create-f">    
    
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:fragment_components/createContentFragment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentCredentials">
            <h1 class="text-2xl font-bold mb-2">
                Credentials
            </h1>
            <?php $_smarty_tpl->_subTemplateRender('file:editFragments/credentials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentIframe">
            <h1 class="text-2xl font-bold mb-2">
                Iframe
            </h1>
            <?php $_smarty_tpl->_subTemplateRender('file:editFragments/iframe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentImage">
            <h1 class="text-2xl font-bold mb-2">
                Image
            </h1>
            <?php $_smarty_tpl->_subTemplateRender('file:editFragments/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentLink">
            <h1 class="text-2xl font-bold mb-2">
                Link
            </h1>
            <?php $_smarty_tpl->_subTemplateRender('file:editFragments/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentNews">
            <h1 class="text-2xl font-bold mb-2">
                News
            </h1>
            <?php $_smarty_tpl->_subTemplateRender('file:editFragments/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentProjectinfo">
            <h1 class="text-2xl font-bold mb-2">
                Project Info
            </h1>
            <?php $_smarty_tpl->_subTemplateRender('file:editFragments/projectinfo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentSocials">
            <h1 class="text-2xl font-bold mb-2">
                Socials
            </h1>
            <?php $_smarty_tpl->_subTemplateRender('file:editFragments/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentText">
            <h1 class="text-2xl font-bold mb-2">
                Text
            </h1>
            <?php $_smarty_tpl->_subTemplateRender('file:editFragments/text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Create",'type'=>"primary"), 0, false);
?>
</form>

<?php
}
}
/* {/block 'content'} */
}
