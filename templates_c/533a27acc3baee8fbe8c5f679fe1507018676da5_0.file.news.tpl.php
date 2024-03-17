<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:53:25
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragments\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f73c254e2260_37974871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '533a27acc3baee8fbe8c5f679fe1507018676da5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragments\\news.tpl',
      1 => 1710533356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f73c254e2260_37974871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Mosaic\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class=" p-4 rounded-md">
    <div class="mb-4">
        <h2 class="text-xl font-bold mb-2"><a href="<?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value['Link'];?>
" target="_blank" rel="noopener noreferrer"><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Title"];?>
 →</a></h2>
        <div class="mb-4">
            <span class="font-bold">Date:</span>
            <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['fragmentContent']->value["Date"],"%B %e, %Y");?>
</span>
        </div>
        <p><?php echo $_smarty_tpl->tpl_vars['fragmentContent']->value["Description"];?>
</p>
    </div>
</div>
<?php }
}
