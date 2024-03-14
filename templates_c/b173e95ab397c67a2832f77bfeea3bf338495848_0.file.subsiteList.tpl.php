<?php
/* Smarty version 4.4.1, created on 2024-03-14 22:33:46
  from 'C:\xampp\htdocs\Mosaic\src\templates\user\subsiteList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f36d3a48f887_71231153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b173e95ab397c67a2832f77bfeea3bf338495848' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user\\subsiteList.tpl',
      1 => 1710452025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f36d3a48f887_71231153 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w-full">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subsites']->value, 'subsite');
$_smarty_tpl->tpl_vars['subsite']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsite']->value) {
$_smarty_tpl->tpl_vars['subsite']->do_else = false;
?>
        <div class="p-4 border-2 border-primary m-4 rounded-xl w-full">
            <h2><?php echo $_smarty_tpl->tpl_vars['subsite']->value["Name"];?>
</h2>
            <p>Route: <a href="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/u/<?php echo $_smarty_tpl->tpl_vars['user']->value["Username"];?>
/<?php echo $_smarty_tpl->tpl_vars['subsite']->value["Route"];?>
"><?php echo $_smarty_tpl->tpl_vars['subsite']->value["Route"];?>
</a></p>
            <p>Short route (pro): <a href="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/s/<?php echo $_smarty_tpl->tpl_vars['subsite']->value["ShortRoute"];?>
"><?php echo $_smarty_tpl->tpl_vars['subsite']->value["Route"];?>
</a></p>
            <?php if ('isOwner') {?>
                <p>Edit: <a href="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/edit/s/<?php echo $_smarty_tpl->tpl_vars['subsite']->value["SubSiteId"];?>
">Subsite</a></p>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
