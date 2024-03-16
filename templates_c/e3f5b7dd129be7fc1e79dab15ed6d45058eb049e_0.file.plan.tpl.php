<?php
/* Smarty version 4.4.1, created on 2024-03-17 00:12:55
  from 'C:\xampp\htdocs\Mosaic\src\templates\site_components\plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f62777c95714_54732227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f5b7dd129be7fc1e79dab15ed6d45058eb049e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\site_components\\plan.tpl',
      1 => 1710630605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f62777c95714_54732227 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="flex flex-col items-center justify-center">
    <div class="max-w-md border border-gray-300 rounded-md p-4 shadow-md">
        <div>
            <h2 class="text-lg font-bold mb-2">Product Information</h2>
            <div class="flex flex-col mb-2">
                <span><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Name"];?>
</span>
            </div>
            <div class="flex flex-col mb-2">
                <span><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Preis"];?>
</span>
            </div>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['extraFragmentContent']->value))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extraFragmentContent']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <div class="mt-4">
                    <h2 class="text-lg font-bold mb-2"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h2>
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div>


<?php }
}
