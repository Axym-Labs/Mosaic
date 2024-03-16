<?php
/* Smarty version 4.4.1, created on 2024-03-16 23:59:57
  from 'C:\xampp\htdocs\Mosaic\src\templates\subsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6246d7fffd6_04127129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db3efbc7c248eafa04502473962035196f2b72b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\subsite.tpl',
      1 => 1710629942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site_components/subsiteView.tpl' => 1,
  ),
),false)) {
function content_65f6246d7fffd6_04127129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9550385465f6246d7fd519_67101381', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base/base.tpl');
}
/* {block 'content'} */
class Block_9550385465f6246d7fd519_67101381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9550385465f6246d7fd519_67101381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<br>
<br>

<?php $_smarty_tpl->_subTemplateRender('file:site_components/subsiteView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<br>

<h1>Data</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" maxlength="50"><br>

        <label for="Route">Route:</label>
        <input type="text" id="Route" name="Route" maxlength="50"><br>

        <label for="ShortRoute">Short Route:</label>
        <input type="text" id="ShortRoute" name="ShortRoute" maxlength="50"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
}
}
/* {/block 'content'} */
}
