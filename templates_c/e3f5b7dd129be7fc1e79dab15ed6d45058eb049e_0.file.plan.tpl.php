<?php
/* Smarty version 4.4.1, created on 2024-03-16 23:48:45
  from 'C:\xampp\htdocs\Mosaic\src\templates\site_components\plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f621cda9da09_44596544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f5b7dd129be7fc1e79dab15ed6d45058eb049e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\site_components\\plan.tpl',
      1 => 1710628715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f621cda9da09_44596544 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Options</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="FragmentBackgroundColorOption">Fragment Background Color Option:</label>
        <input type="checkbox" id="FragmentBackgroundColorOption" name="options[]" value="FragmentBackgroundColorOption"><br>

        <label for="TextColorOption">Text Color Option:</label>
        <input type="checkbox" id="TextColorOption" name="options[]" value="TextColorOption"><br>

        <label for="FontOption">Font Option:</label>
        <input type="checkbox" id="FontOption" name="options[]" value="FontOption"><br>

        <label for="OpacityOption">Opacity Option:</label>
        <input type="checkbox" id="OpacityOption" name="options[]" value="OpacityOption"><br>

        <label for="SubSiteBackgroundImageOption">Sub Site Background Image Option:</label>
        <input type="checkbox" id="SubSiteBackgroundImageOption" name="options[]" value="SubSiteBackgroundImageOption"><br>

        <label for="ShortLinkOption">Short Link Option:</label>
        <input type="checkbox" id="ShortLinkOption" name="options[]" value="ShortLinkOption"><br>

        <label for="SubSiteLimit">Sub Site Limit:</label>
        <input type="number" id="SubSiteLimit" name="SubSiteLimit" min="0"><br>

        <label for="FragmentLimit">Fragment Limit:</label>
        <input type="number" id="FragmentLimit" name="FragmentLimit" min="0"><br>

        <label for="SocialsOrderOption">Socials Order Option:</label>
        <input type="checkbox" id="SocialsOrderOption" name="options[]" value="SocialsOrderOption"><br>

        <label for="Preis">Preis:</label>
        <input type="text" id="Preis" name="Preis"><br>

        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" maxlength="50"><br>

        <?php echo '<?php'; ?>
 $associativeArray = array(); <?php echo '?>'; ?>


        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php }
}
