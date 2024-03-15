<?php
/* Smarty version 4.4.1, created on 2024-03-16 00:14:00
  from 'C:\xampp\htdocs\Mosaic\src\templates\createFragment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4d6388290b3_75289089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a40155ecccb44d9485ba40a5e223f7fa84931f0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\createFragment.tpl',
      1 => 1710543076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:editFragment/credentials.tpl' => 1,
    'file:editFragment/iframe.tpl' => 1,
    'file:editFragment/image.tpl' => 1,
    'file:editFragment/link.tpl' => 1,
    'file:editFragment/news.tpl' => 1,
    'file:editFragment/projectinfo.tpl' => 1,
    'file:editFragment/socials.tpl' => 1,
    'file:editFragment/text.tpl' => 1,
  ),
),false)) {
function content_65f4d6388290b3_75289089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156195899065f4d638824ab1_77908593', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_156195899065f4d638824ab1_77908593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_156195899065f4d638824ab1_77908593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form method="post" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/edit/s/<?php echo $_smarty_tpl->tpl_vars['subsiteId']->value;?>
/create-f">    
    
    <div>
        <div class="fragment-type" id="credentials">
            <?php $_smarty_tpl->_subTemplateRender('file:editFragment/credentials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type" id="iframe">
            <?php $_smarty_tpl->_subTemplateRender('file:editFragment/iframe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type" id="image">
            <?php $_smarty_tpl->_subTemplateRender('file:editFragment/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type" id="link">
            <?php $_smarty_tpl->_subTemplateRender('file:editFragment/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type" id="news">
            <?php $_smarty_tpl->_subTemplateRender('file:editFragment/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type" id="projectinfo">
            <?php $_smarty_tpl->_subTemplateRender('file:editFragment/projectinfo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type" id="socials">
            <?php $_smarty_tpl->_subTemplateRender('file:editFragment/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="fragment-type" id="text">
            <?php $_smarty_tpl->_subTemplateRender('file:editFragment/text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    
    </div>

</form>

<?php
}
}
/* {/block 'content'} */
}
