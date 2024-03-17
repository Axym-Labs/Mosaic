<?php
/* Smarty version 4.4.1, created on 2024-03-17 01:48:26
  from 'C:\xampp\htdocs\Mosaic\src\templates\subsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f63dda9555d4_63490297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db3efbc7c248eafa04502473962035196f2b72b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\subsite.tpl',
      1 => 1710636504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site_components/subsiteView.tpl' => 1,
  ),
),false)) {
function content_65f63dda9555d4_63490297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188986428065f63dda94ee67_19235693', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_188986428065f63dda94ee67_19235693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_188986428065f63dda94ee67_19235693',
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

<div class="">
    <div class="max-w-md p-6 bg-highlightedbg rounded-xl shadow-lg">
        <div>
            <p class="text-lg font-bold mb-4">Page Information</p>
            <div class="flex justify-between mb-2">
                <p>Name:</p>
                <p><?php echo $_smarty_tpl->tpl_vars['subsite']->value["Name"];?>
</p>
            </div>
            <div class="flex justify-between mb-2">
                <p>Route:</p>
                <p><?php echo $_smarty_tpl->tpl_vars['subsite']->value["Route"];?>
</p>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['subsite']->value["ShortRoute"] != '') {?>
            <div class="flex justify-between mb-2">
                <p>ShortRoute:</p>
                <p><?php echo $_smarty_tpl->tpl_vars['subsite']->value["ShortRoute"];?>
</p>
            </div>
            <?php }?>
        </div>
    </div>
</div>



<?php
}
}
/* {/block 'content'} */
}
