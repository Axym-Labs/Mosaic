<?php
/* Smarty version 4.4.1, created on 2024-03-15 15:07:55
  from 'C:\xampp\htdocs\Mosaic\src\templates\subsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4563b5aef89_35865757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db3efbc7c248eafa04502473962035196f2b72b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\subsite.tpl',
      1 => 1710503131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site_components/subsiteView.tpl' => 1,
  ),
),false)) {
function content_65f4563b5aef89_35865757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157318050965f4563b5ac484_21886570', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_157318050965f4563b5ac484_21886570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_157318050965f4563b5ac484_21886570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<br>
<br>

<?php $_smarty_tpl->_subTemplateRender('file:site_components/subsiteView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<br>

<h1>Data</h1>
<?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['subsite']->value,$_smarty_tpl->tpl_vars['subsiteColumnTypeData']->value);?>


<?php
}
}
/* {/block 'content'} */
}
