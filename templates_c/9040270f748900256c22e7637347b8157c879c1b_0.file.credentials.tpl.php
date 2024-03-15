<?php
/* Smarty version 4.4.1, created on 2024-03-15 15:07:55
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\credentials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f4563b4db044_14012997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9040270f748900256c22e7637347b8157c879c1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\credentials.tpl',
      1 => 1710511278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4563b4db044_14012997 (Smarty_Internal_Template $_smarty_tpl) {
?>credentials

<div class="bg-gray-100 p-4 rounded-md">
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["ProfilePicture"]) {?>
        <div class="mt-4">
            <span class="font-bold">Profile Picture:</span>
            <img src="data:image/jpeg;base64,<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['ProfilePicture'];?>
" alt="Profile Picture" class="w-32 h-32 mt-2 rounded-full">
        </div>
    <?php }?>
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">Username:</span>
        <span><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Username"];?>
</span>
    </div>
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">First Name:</span>
        <span><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["FirstName"];?>
</span>
    </div>
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">Last Name:</span>
        <span><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["LastName"];?>
</span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["ShowPersonalData"]) {?>
        <div class="flex items-center mb-2">
            <span class="font-bold mr-2">Email:</span>
            <span><?php echo $_smarty_tpl->tpl_vars['extraFragmentContent']->value["Email"];?>
</span>
        </div>
    <?php }?>
</div>


<?php echo GenericRender::RenderDict($_smarty_tpl->tpl_vars['fragmentContent']->value,$_smarty_tpl->tpl_vars['fragmentColumnTypeData']->value);?>


<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["ShowPersonalData"];?>

<br>
<br>
<?php echo GenericRender::RenderDictAsText($_smarty_tpl->tpl_vars['extraFragmentContent']->value);?>


<?php }
}
