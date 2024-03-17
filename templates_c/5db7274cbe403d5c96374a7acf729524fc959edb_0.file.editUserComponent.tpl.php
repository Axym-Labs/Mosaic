<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:30:52
  from 'C:\xampp\htdocs\Mosaic\src\templates\user\editUserComponent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f736dcc63131_82043719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5db7274cbe403d5c96374a7acf729524fc959edb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user\\editUserComponent.tpl',
      1 => 1710700252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/input/label.tpl' => 11,
    'file:components/input/input.tpl' => 9,
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f736dcc63131_82043719 (Smarty_Internal_Template $_smarty_tpl) {
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
if (!$_smarty_tpl->tpl_vars['userIsUpdate']->value) {?>/create/user<?php } else { ?>/a<?php }?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"Email",'required'=>true), 0, false);
?>
                </td>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"email",'id'=>"Email",'required'=>true,'value'=>GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['user']->value,'Email')), 0, false);
?>
                </td>
            </tr>
            
            <tr>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"FirstName",'text'=>"First name",'required'=>true), 0, true);
?>
                </td>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"FirstName",'required'=>true,'value'=>GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['user']->value,'FirstName')), 0, true);
?>                    
                </td>
            </tr>

            <tr>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"LastName",'text'=>"Last name",'required'=>true), 0, true);
?>
                </td>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"LastName",'required'=>true,'value'=>GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['user']->value,'LastName')), 0, true);
?>
                </td>
            </tr>
            
            <tr>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"ProfilePicture",'text'=>"Profile Picture"), 0, true);
?>
                </td>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"file",'id'=>"ProfilePicture",'otherAttributes'=>"accept='.jpg, .jpeg'"), 0, true);
?>
                    <?php if (GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['user']->value,'ProfilePicture') != '') {?>
                    <img class="w-12 h-12 inline-block" src="data:image/jpeg;base64,<?php echo GenericRender::InsertValuePlainly($_smarty_tpl->tpl_vars['user']->value,'ProfilePicture','img');?>
" alt="Profile picture">
                    <?php }?>
                </td>
                <br>
            </tr>
            
            <tr>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"Username",'required'=>true), 0, true);
?>
                </td>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"Username",'required'=>true,'value'=>GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['user']->value,'Username')), 0, true);
?>
                </td>
            </tr>
            
            <?php if (!$_smarty_tpl->tpl_vars['userIsUpdate']->value) {?>
                <tr>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"Password",'required'=>true), 0, true);
?>
                    </td>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"password",'for'=>"Password",'required'=>true), 0, true);
?>
                    </td>
                </tr>
                <tr>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"ConfirmPassword",'text'=>"Confirm Password",'required'=>true), 0, true);
?>
                    </td>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"password",'id'=>"ConfirmPassword",'required'=>true), 0, true);
?>
                    </td>
                </tr>
            <?php } else { ?>
                <tr>
                    <td class="p-3">
                        <p>
                            Optional: Change password
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="p-3 pl-8">
                        <div class="">
                            <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"NewPassword",'text'=>"New password"), 0, true);
?>
                        </div>
                    </td>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"password",'id'=>"NewPassword"), 0, true);
?>
                    </td>
                </tr>
                <tr>
                    <td class="p-3 pl-8">
                        <div class="">
                            <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"ConfirmNewPassword",'text'=>"Confirm new password"), 0, true);
?>
                        </div>
                    </td>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"password",'id'=>"ConfirmNewPassword"), 0, true);
?>
                    </td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['userIsUpdate']->value) {?>
                <tr>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"Password",'text'=>"Current password",'required'=>true), 0, true);
?>
                    </td>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"password",'id'=>"Password",'required'=>true), 0, true);
?>
                    </td>
                </tr>
            <?php }?>
            <tr>
                <td class="p-3">
                    <?php $_smarty_tpl->_subTemplateRender('file:components/submitbutton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->tpl_vars['userSubmitText']->value,'type'=>"primary"), 0, false);
?>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php }
}
