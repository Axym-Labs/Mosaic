<?php
/* Smarty version 4.4.1, created on 2024-03-15 00:25:35
  from 'C:\xampp\htdocs\Mosaic\src\templates\createUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f3876fd20c95_99064142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d3fd7f8584b385a3d030d9a50941131bdc3defa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\createUser.tpl',
      1 => 1710458735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f3876fd20c95_99064142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188861453865f3876fd1c4c9_62806598', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_188861453865f3876fd1c4c9_62806598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_188861453865f3876fd1c4c9_62806598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div>
    <form action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/create/user" method="POST" enctype="multipart/form-data">
        <label for="Email">Email:</label>
        <input class="bg-bgcol border-b border-white" type="text" id="Email" name="Email" required><br>

        <label for="LastName">Last Name:</label>
        <input class="bg-bgcol border-b border-white" type="text" id="LastName" name="LastName" required><br>

        <label for="FirstName">First Name:</label>
        <input class="bg-bgcol border-b border-white" type="text" id="FirstName" name="FirstName" required><br>

        <label for="Password">Password:</label>
        <input class="bg-bgcol border-b border-white" type="password" id="Password" name="Password" required><br>

        <label for="ConfirmPassword">Confirm password:</label>
        <input class="bg-bgcol border-b border-white" type="password" id="ConfirmPassword" name="ConfirmPassword" required><br>

        <label for="ProfilePicture">Profile Picture:</label>
        <input class="bg-bgcol border-b border-white" type="file" id="ProfilePicture" name="ProfilePicture" accept="image/jpeg"><br>

        <label for="Username">Username:</label>
        <input class="bg-bgcol border-b border-white" type="text" id="Username" name="Username" required><br>
        
        <?php $_smarty_tpl->_subTemplateRender('file:components/submitbutton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Create User"), 0, false);
?>
    </form>
</div>



<?php
}
}
/* {/block 'content'} */
}
