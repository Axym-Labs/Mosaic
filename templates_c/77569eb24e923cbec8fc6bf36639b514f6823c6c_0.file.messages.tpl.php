<?php
/* Smarty version 4.4.1, created on 2024-03-06 15:54:22
  from 'C:\xampp\htdocs\Mosaic\src\templates\base\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65e8839e739415_55310943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77569eb24e923cbec8fc6bf36639b514f6823c6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\base\\messages.tpl',
      1 => 1709736860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8839e739415_55310943 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifier']->value->GetMessages(), 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
    <div class="card">
        <div class="card-body message-<?php echo $_smarty_tpl->tpl_vars['message']->value["messageType"];?>
">
            <p><?php echo $_smarty_tpl->tpl_vars['message']->value["message"];?>
</p>
            <button class="btn btn-danger" onclick="this.parentElement.parentElement.remove()">Remove</button>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
