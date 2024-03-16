<?php
/* Smarty version 4.4.1, created on 2024-03-16 23:37:19
  from 'C:\xampp\htdocs\Mosaic\src\templates\base\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f61f1f804a00_42157438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7cebd1f6edd633a81c4d68cb06c79ac0e9616c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\base\\base.tpl',
      1 => 1710628639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/header.tpl' => 1,
    'file:base/messages.tpl' => 1,
    'file:base/footer.tpl' => 1,
  ),
),false)) {
function content_65f61f1f804a00_42157438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="~/" />

    <link href="<?php echo BusinessConstants::$STATIC_URL_PREFIX;?>
/css/site.css" rel="stylesheet" />

    <link rel="icon" type="image/png" href="<?php echo BusinessConstants::$STATIC_URL_PREFIX;?>
/assets/favicon.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Inter:wght@200;300;400;500;600&family=Merriweather:wght@300;400;700;900&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap"
        rel="stylesheet">        

    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo BusinessConstants::$STATIC_URL_PREFIX;?>
/js/twConfig.js"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91280454065f61f1f7fd575_38454054', 'head');
?>

    
</head>

<body class="bg-bgcol text-gray-400">
    <?php if (!(isset($_smarty_tpl->tpl_vars['redirectToFront']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('redirectToFront', false);?>
    <?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['maxWidth']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('maxWidth', "1200px");?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("file:base/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:base/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="flex justify-center">
        <div class="mx-4 md:mx-6" style="max-width: <?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
; width: 100%;">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18950911565f61f1f803ee7_34313647', 'content');
?>

        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:base/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="<?php echo BusinessConstants::$STATIC_URL_PREFIX;?>
/js/baseDomManagement.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'head'} */
class Block_91280454065f61f1f7fd575_38454054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_91280454065f61f1f7fd575_38454054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_18950911565f61f1f803ee7_34313647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18950911565f61f1f803ee7_34313647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
