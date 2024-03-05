<?php
/* Smarty version 4.4.1, created on 2024-03-05 21:06:21
  from 'C:\xampp\htdocs\Mosaic\src\templates\base\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65e77b3d8a4945_92372073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7cebd1f6edd633a81c4d68cb06c79ac0e9616c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\base\\base.tpl',
      1 => 1709669153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e77b3d8a4945_92372073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="~/" />

    <link href="<?php echo htmlspecialchars((string)BusinessConstants::$STATIC_URL_PREFIX, ENT_QUOTES, 'UTF-8', true);?>
/static/css/site.css" rel="stylesheet" />

    <link rel="icon" type="image/png" href="<?php echo BusinessConstants::$STATIC_URL_PREFIX;?>
/static/assets/favicon.jpg" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&family=Merriweather:wght@300;400;700;900&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap"
        rel="stylesheet">

    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo BusinessConstants::$STATIC_URL_PREFIX;?>
/static/js/twConfig.js"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167892505365e77b3d8a3712_35423044', 'head');
?>

    
</head>

<body class="bg-bgcol text-gray-200">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128399030865e77b3d8a4279_90514087', 'content');
?>


    <?php echo '<script'; ?>
 src="/static/js/baseDomManagement.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'head'} */
class Block_167892505365e77b3d8a3712_35423044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_167892505365e77b3d8a3712_35423044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_128399030865e77b3d8a4279_90514087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_128399030865e77b3d8a4279_90514087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
