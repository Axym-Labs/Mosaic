<?php
/* Smarty version 4.4.1, created on 2024-03-12 11:53:40
  from 'C:\xampp\htdocs\Mosaic\src\templates\createUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f03434d3c0a4_14108541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d3fd7f8584b385a3d030d9a50941131bdc3defa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\createUser.tpl',
      1 => 1710240805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f03434d3c0a4_14108541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148369797465f03434ca76a2_11652943', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_148369797465f03434ca76a2_11652943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148369797465f03434ca76a2_11652943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div>
    <form action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/create/user">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="profilepicture">Profile Picture:</label>
        <input type="file" id="profilepicture" name="profilepicture" accept="image/*"><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <input type="submit" value="Submit">
    </form>
</div>

<?php
}
}
/* {/block 'content'} */
}
