<?php
/* Smarty version 4.4.1, created on 2024-03-16 17:35:50
  from 'C:\xampp\htdocs\Mosaic\src\templates\site_components\editSubsiteComponent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f5ca66838694_09134643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1138d647801e9bce3d5b906ac3fe0ff19a8629ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\site_components\\editSubsiteComponent.tpl',
      1 => 1710606947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f5ca66838694_09134643 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['subsiteSubmitText']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('subsiteSubmitText', "Create subsite");
}
if (!(isset($_smarty_tpl->tpl_vars['subsiteIsUpdate']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('subsiteIsUpdate', false);
}
if (!(isset($_smarty_tpl->tpl_vars['subsite']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('subsite', null);
}?>

<form method="POST" enctype="multipart/form-data" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;
if (!$_smarty_tpl->tpl_vars['subsiteIsUpdate']->value) {?>/create/subsite<?php } else { ?>/edit/s/<?php echo $_smarty_tpl->tpl_vars['existingSubsiteId']->value;
}?>">
    <div>
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" maxlength="50" placeholder="My subsite" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['subsite']->value,'Name');?>
>
    </div>
    <div>
        <label for="Route">Route:</label>
        <input type="text" id="Route" name="Route" maxlength="50" placeholder="Enter Route" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['subsite']->value,'Route');?>
>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['planperm']->value["ShortLinkOption"]) {?>
        <div>
            <label for="ShortRoute">Short Route:</label>
            <input type="text" id="ShortRoute" name="ShortRoute" maxlength="50" placeholder="Enter Short Route">
        </div>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->tpl_vars['subsiteSubmitText']->value,'type'=>"primary"), 0, false);
?>
</form><?php }
}
