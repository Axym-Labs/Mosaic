<?php
/* Smarty version 4.4.1, created on 2024-03-17 15:04:47
  from 'C:\xampp\htdocs\Mosaic\src\templates\user\userProfileWrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6f87f5fed34_17828340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8320f9b912b0716e5d46f7b3288a4a30dc5fd719' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\user\\userProfileWrapper.tpl',
      1 => 1710684286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6f87f5fed34_17828340 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['isVisitingAccountPage']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('isVisitingAccountPage', false);
}?>


<div class="flex flex-col items-center justify-center">
    <div class="max-w-md rounded-md p-4 shadow-md">
        <div class="mb-4">
            <h2 class="text-lg font-bold mb-2">User Information</h2>
            <div class="flex flex-col mb-2">
                <span><?php echo $_smarty_tpl->tpl_vars['user']->value["Email"];?>
</span>
            </div>
            <div class="flex flex-col mb-2">
                <span><?php echo $_smarty_tpl->tpl_vars['user']->value["LastName"];?>
</span>
            </div>
            <div class="flex flex-col mb-2">
                <span><?php echo $_smarty_tpl->tpl_vars['user']->value["FirstName"];?>
</span>
            </div>
            <div class="flex flex-col mb-2">
                <span><?php echo $_smarty_tpl->tpl_vars['user']->value["Username"];?>
</span>
            </div>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['user']->value["ProfilePicture"])) && $_smarty_tpl->tpl_vars['user']->value["ProfilePicture"] != '') {?>
            <div class="mb-4">
                <img class="w-20 h-20 rounded-2xl border-2 border-highlightedbg" src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['user']->value['ProfilePicture']);?>
" alt="Profile Picture" class="max-w-full h-auto">
            </div>
        <?php }?>
    </div>
</div>
<?php }
}
