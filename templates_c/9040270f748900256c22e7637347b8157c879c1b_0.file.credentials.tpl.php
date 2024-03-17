<?php
/* Smarty version 4.4.1, created on 2024-03-17 15:20:20
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\credentials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6fc24735c60_28854556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9040270f748900256c22e7637347b8157c879c1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\credentials.tpl',
      1 => 1710685219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../user/userProfile.tpl' => 1,
  ),
),false)) {
function content_65f6fc24735c60_28854556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../user/userProfile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user'=>$_smarty_tpl->tpl_vars['extraFragmentContent']->value), 0, false);
?>

<!-- <div class=" p-4 rounded-md">
    <?php if ($_smarty_tpl->tpl_vars['extraFragmentContent']->value["ProfilePicture"]) {?>
        <div class="mt-4">
            <span class="font-bold">Profile Picture:</span>
            <img src="data:image/jpeg;base64,<?php echo $_smarty_tpl->tpl_vars['extraFragmentContent']->value['ProfilePicture'];?>
" alt="Profile Picture" class="w-32 h-32 mt-2 rounded-full">
        </div>
    <?php }?>
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">Username:</span>
        <span><?php echo $_smarty_tpl->tpl_vars['extraFragmentContent']->value["Username"];?>
</span>
    </div>
    <div class="flex items-center mb-2">
        <span><?php echo $_smarty_tpl->tpl_vars['extraFragmentContent']->value["FirstName"];?>
</span>
    </div>
    <div class="flex items-center mb-2">
        <span><?php echo $_smarty_tpl->tpl_vars['extraFragmentContent']->value["LastName"];?>
</span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['fragmentContent']->value["ShowPersonalData"]) {?>
        <div class="flex items-center mb-2">
            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['extraFragmentContent']->value["Email"];?>
"><?php echo $_smarty_tpl->tpl_vars['extraFragmentContent']->value["Email"];?>
</a>
        </div>
    <?php }?>
</div> -->
<?php }
}
