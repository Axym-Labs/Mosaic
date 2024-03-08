<?php
/* Smarty version 4.4.1, created on 2024-03-08 14:50:19
  from 'C:\xampp\htdocs\Mosaic\src\templates\larger_components\planOverview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65eb179b3a9381_98191559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1d0efae8accbbcc6320f6025c06839512270c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\larger_components\\planOverview.tpl',
      1 => 1709905816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:larger_components/plan.tpl' => 1,
  ),
),false)) {
function content_65eb179b3a9381_98191559 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="md:grid md:grid-cols-3">
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['plans']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['plans']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <div class="p-1 m-1 md:m-3">
            <?php $_smarty_tpl->_subTemplateRender("file:larger_components/plan.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('plan'=>$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value],'planperm'=>$_smarty_tpl->tpl_vars['planperms']->value[$_smarty_tpl->tpl_vars['i']->value],'planColumnTypeData'=>$_smarty_tpl->tpl_vars['planColumnTypeData']->value,'planpermColumnTypeData'=>$_smarty_tpl->tpl_vars['planpermColumnTypeData']->value), 0, true);
?>
        </div>
    <?php }
}
?>
</div><?php }
}
