<?php
/* Smarty version 4.4.1, created on 2024-03-17 01:25:28
  from 'C:\xampp\htdocs\Mosaic\src\templates\site_components\plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f63878bb3a26_84153385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f5b7dd129be7fc1e79dab15ed6d45058eb049e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\site_components\\plan.tpl',
      1 => 1710635126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f63878bb3a26_84153385 (Smarty_Internal_Template $_smarty_tpl) {
?>

<tr class="p-1 m-1 md:m-6">
    <td class="p-2 md:p-4">
        <p class="text-white font-bold">
            <?php echo $_smarty_tpl->tpl_vars['plan']->value["Name"];?>

        </p>
    </td>
    <td class="p-2 md:p-4">
        <p class="text-gray-200 font-semibold">
            <?php echo $_smarty_tpl->tpl_vars['planperm']->value["SubSiteLimit"];?>

        </p>
    </td>
    <td class="p-2 md:p-4">
        <p class="text-gray-200 font-semibold">
            <?php echo $_smarty_tpl->tpl_vars['planperm']->value["FragmentLimit"];?>

        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            <?php if (($_smarty_tpl->tpl_vars['planperm']->value["ShortLinkOption"])) {?>✅<?php } else { ?>-<?php }?>
        </p>
    </td>
    <td class="p-2 md:p-4 text-bold text-white">
        <p style="visibility: hidden">
            A
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            <?php if (($_smarty_tpl->tpl_vars['planperm']->value["FragmentBackgroundColorOption"])) {?>✅<?php } else { ?>-<?php }?>
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            <?php if (($_smarty_tpl->tpl_vars['planperm']->value["OpacityOption"])) {?>✅<?php } else { ?>-<?php }?>
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            <?php if (($_smarty_tpl->tpl_vars['planperm']->value["SocialsOrderOption"])) {?>✅<?php } else { ?>-<?php }?>
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            <?php if (($_smarty_tpl->tpl_vars['planperm']->value["TextColorOption"])) {?>✅<?php } else { ?>-<?php }?>
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            <?php if (($_smarty_tpl->tpl_vars['planperm']->value["FontOption"])) {?>✅<?php } else { ?>-<?php }?>
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            <?php if (($_smarty_tpl->tpl_vars['planperm']->value["SubSiteBackgroundImageOption"])) {?>✅<?php } else { ?>-<?php }?>
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p class="text-white font-bold">
            <?php echo $_smarty_tpl->tpl_vars['plan']->value["Preis"];?>

        </p>
    </td>
</tr>
<?php }
}
