<?php
/* Smarty version 4.4.1, created on 2024-03-15 13:01:56
  from 'C:\xampp\htdocs\Mosaic\src\templates\base\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f438b44838d9_33530509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77569eb24e923cbec8fc6bf36639b514f6823c6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\base\\messages.tpl',
      1 => 1710504115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/message.tpl' => 1,
  ),
),false)) {
function content_65f438b44838d9_33530509 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['notifier']->value))) {?>
    <div class="sticky right-6 bottom-6 w-64 md:w-96" style="position:fixed;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifier']->value->GetMessages(true), 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender("file:components/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['message']->value["message"],'type'=>$_smarty_tpl->tpl_vars['message']->value["messageType"]), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
