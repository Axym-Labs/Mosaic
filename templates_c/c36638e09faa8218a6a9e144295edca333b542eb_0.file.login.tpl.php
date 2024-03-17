<?php
/* Smarty version 4.4.1, created on 2024-03-17 20:53:56
  from 'C:\xampp\htdocs\Mosaic\src\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f74a54c8e938_41067632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36638e09faa8218a6a9e144295edca333b542eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\login.tpl',
      1 => 1710705236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
    'file:components/input/label.tpl' => 2,
    'file:components/input/input.tpl' => 2,
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f74a54c8e938_41067632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69358433665f74a54c88174_91810040', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_69358433665f74a54c88174_91810040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_69358433665f74a54c88174_91810040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="flex justify-center">
    <div class="w-full md:w-xl md:h-96 flex justify-center">
        <div class="">
            <?php $_smarty_tpl->_subTemplateRender("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Login"), 0, false);
?>
            <form action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/login" method="POST" enctype="multipart/form-data">
                <table>
                    <table>
                        <tr class="">
                            <td class="p-3">
                                <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"Email",'required'=>true), 0, false);
?>
                            </td>
                            <td class="p-3">
                                <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"email",'id'=>"Email",'class'=>"text-lg text-white",'required'=>true), 0, false);
?>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="p-3">
                                <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"Password",'required'=>true), 0, true);
?>
                            </td>
                            <td class="p-3">
                                <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"password",'id'=>"Password",'class'=>"text-lg text-white",'required'=>true), 0, true);
?>
                            </td>
                        </tr>
                </table>
                <div class="flex justify-end">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Login",'type'=>"primary",'class'=>"w-full"), 0, false);
?>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
