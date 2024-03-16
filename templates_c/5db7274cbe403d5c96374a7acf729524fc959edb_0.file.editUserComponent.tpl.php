<?php
/* Smarty version 4.4.1, created on 2024-03-16 17:37:40
  from 'C:\xampp\htdocs\Mosaic\src\templates\user\editUserComponent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f5cad4a56781_38264912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5db7274cbe403d5c96374a7acf729524fc959edb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user\\editUserComponent.tpl',
      1 => 1710606963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f5cad4a56781_38264912 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['userSubmitText']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('userSubmitText', "Create user");
}
if (!(isset($_smarty_tpl->tpl_vars['userIsUpdate']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('userIsUpdate', false);
}
if (!(isset($_smarty_tpl->tpl_vars['user']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('user', null);
}?>

<div>
    <form action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;
if (!$_smarty_tpl->tpl_vars['userIsUpdate']->value) {?>/create/user<?php } else { ?>/a<?php }?>" method="POST">
        <div>
            <label for="Email">Email:</label>
            <input class="bg-bgcol border-b border-white" type="text" id="Email" name="Email" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['user']->value,'Email');?>
>
        </div>
        
        <div>
            <label for="LastName">Last Name:</label>
            <input class="bg-bgcol border-b border-white" type="text" id="LastName" name="LastName" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['user']->value,'LastName');?>
>
        </div>
        
        <div>
            <label for="FirstName">First Name:</label>
            <input class="bg-bgcol border-b border-white" type="text" id="FirstName" name="FirstName" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['user']->value,'FirstName');?>
>
        </div>
        
        <div>
            <label for="ProfilePicture">Profile Picture:</label>
            <?php if (GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['user']->value,'ProfilePicture') != '') {?>
            <img class="w-12 h-12 inline-block" src="data:image/jpeg;base64,<?php echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['user']->value,'ProfilePicture','img');?>
" alt="Profile picture">
            <?php }?>
            <br>
            <input class="bg-bgcol border-b border-white" type="file" id="ProfilePicture" name="ProfilePicture" accept="image/jpeg">
        </div>
        
        <div>
            <label for="Username">Username:</label>
            <input class="bg-bgcol border-b border-white" type="text" id="Username" name="Username" required <?php echo GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['user']->value,'Username');?>
>
        </div>
        
        <?php if (!$_smarty_tpl->tpl_vars['userIsUpdate']->value) {?>
        <div>
            <label for="Password">Password:</label>
            <input class="bg-bgcol border-b border-white" type="password" id="Password" name="Password" required>
        </div>
        <div>
            <label for="ConfirmPassword">Confirm password:</label>
            <input class="bg-bgcol border-b border-white" type="password" id="ConfirmPassword" name="ConfirmPassword" required>
        </div>
        <?php } else { ?>
        <div>
            <p1>
                Optional: Change password
            </p1>
            <div>
                <label for="NewPassword">New password:</label>
                <input class="bg-bgcol border-b border-white" type="password" id="NewPassword" name="NewPassword">
            </div>
            <div>
                <label for="ConfirmNewPassword">Confirm new password:</label>
                <input class="bg-bgcol border-b border-white" type="password" id="ConfirmNewPassword" name="ConfirmNewPassword">
            </div>
        </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['userIsUpdate']->value) {?>
        <div>
            <label for="Password">Password:</label>
            <input class="bg-bgcol border-b border-white" type="password" id="Password" name="Password" required>
        </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:components/submitbutton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->tpl_vars['userSubmitText']->value,'type'=>"primary"), 0, false);
?>
    </form>
</div>
<?php }
}
