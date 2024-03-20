<?php
/* Smarty version 4.4.1, created on 2024-03-17 19:40:41
  from 'C:\xampp\htdocs\Mosaic\src\templates\site_components\editSubsiteComponent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f73929820fd8_49108380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1138d647801e9bce3d5b906ac3fe0ff19a8629ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\site_components\\editSubsiteComponent.tpl',
      1 => 1710698524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/input/label.tpl' => 3,
    'file:components/input/input.tpl' => 3,
    'file:components/callout.tpl' => 2,
    'file:components/submitbutton.tpl' => 1,
  ),
),false)) {
function content_65f73929820fd8_49108380 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['subsiteSubmitText']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('subsiteSubmitText', "Create subsite");
}
if (!(isset($_smarty_tpl->tpl_vars['subsiteIsUpdate']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('subsiteIsUpdate', false);
}
if (!(isset($_smarty_tpl->tpl_vars['subsite']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('subsite', null);
}?>

<div class="border-l-2 border-primary rounded-r-xl m-4 md:m-6 bg-highlightedbg p-4">
    <form method="POST" enctype="multipart/form-data" action="<?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;
if (!$_smarty_tpl->tpl_vars['subsiteIsUpdate']->value) {?>/create/subsite<?php } else { ?>/edit/s/<?php echo $_smarty_tpl->tpl_vars['existingSubsiteId']->value;
}?>">
        <div class="">
            <table>
                <tr class="">
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"Name",'required'=>true), 0, false);
?>
                    </td>
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"Name",'placeholder'=>"My project",'required'=>true,'value'=>GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['subsite']->value,'Name')), 0, false);
?>
                    </td>
                </tr>
                <tr class="">
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"Route",'required'=>true), 0, true);
?>
                    </td>
                    <td class="p-3">
                        <div class="flex items-center">
                            <p class="text-gray-500 text-xl ml-2"><?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/u/<?php echo $_smarty_tpl->tpl_vars['owner']->value["Username"];?>
/</p>
                            <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"Route",'class'=>"text-lg text-white md:mr-6",'placeholder'=>"my-project",'maxlength'=>"50",'required'=>true,'value'=>GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['subsite']->value,'Route')), 0, true);
?>
                            <?php if (!$_smarty_tpl->tpl_vars['planperm']->value['ShortLinkOption']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:components/callout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Shorter is better"), 0, false);
?>
                            <?php }?>
                        </div>
                    </td>
                </tr>
                <tr class=" <?php if ($_smarty_tpl->tpl_vars['planperm']->value['ShortLinkOption']) {?>opacity-50<?php }?>">
                    <td class="p-3">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/input/label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('for'=>"ShortRoute",'text'=>"Short Route"), 0, true);
?>
                    </td>
                    <td class="p-3">
                        <div class="flex items-center justify-start">
                            <div class="flex items-center justify-start <?php if (!$_smarty_tpl->tpl_vars['planperm']->value['ShortLinkOption']) {?>opacity-50<?php }?>">
                                <p class="text-gray-500 text-xl ml-2"><?php echo BusinessConstants::$UNIVERSAL_ROUTE_PREFIX;?>
/s/</p>
                                <?php if (!$_smarty_tpl->tpl_vars['planperm']->value['ShortLinkOption']) {?>
                                    <?php $_smarty_tpl->_assignInScope('shortRouteInputDisabled', "disabled");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('shortRouteInputDisabled', '');?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:components/input/input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"ShortRoute",'class'=>"text-lg text-white md:mr-6",'maxlength'=>"50",'otherAttributes'=>$_smarty_tpl->tpl_vars['shortRouteInputDisabled']->value,'placeholder'=>"my-project",'required'=>true,'value'=>GenericRender::InsertValueAttribute($_smarty_tpl->tpl_vars['subsite']->value,'ShortRoute')), 0, true);
?>
                            </div>
                            <?php if (!$_smarty_tpl->tpl_vars['planperm']->value['ShortLinkOption']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:components/callout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Upgrade your plan to enable short routes.",'fixed'=>true), 0, true);
?>
                            <?php }?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:components/submitbutton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->tpl_vars['subsiteSubmitText']->value,'type'=>"primary"), 0, false);
?>
    </form>
</div><?php }
}
