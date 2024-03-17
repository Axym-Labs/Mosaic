<?php
/* Smarty version 4.4.1, created on 2024-03-17 13:52:18
  from 'C:\xampp\htdocs\Mosaic\src\templates\fragment_components\createContentFragment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f6e782e24d06_07312603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8215d232c96929fc56662d514c8874880fa2572e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mosaic\\src\\templates\\fragment_components\\createContentFragment.tpl',
      1 => 1710679938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f6e782e24d06_07312603 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="m-4 mb-8 border-l-2 border-primary p-2 pl-4 bg-highlightedbg">
    <h1 class="text-2xl font-bold mb-2">
        Base settings
    </h1>
    <div>
        <label for="BackgroundColor">Background Color (HEX):</label>
        <input type="color" id="BackgroundColor" name="BackgroundColor" value="#000000">
    </div>
    
    <div>
        <label for="Opacity">Background Opacity:</label>
        <input type="range" id="Opacity" name="Opacity" min="0.0" max="1.0" step="0.01" value="0">
    </div>
    
    <div>
        <label for="BackgroundImage">Background Image:</label>
        <input type="file" id="BackgroundImage" name="BackgroundImage" accept=".jpg, .jpeg">
    </div>
</div>

<div class="mb-8">
    <h1>
        Fragment Type
    </h1>
    <div class="flex">
        <div class="m-2 p-2 px-4 bg-highlightedbg rounded-full">
            <input type="radio" id="ContentTableName_Credentials" name="ContentTableName" value="FragmentCredentials" checked>
            <label for="ContentTableName_Credentials">Credentials</label>
        </div>
    
        <div class="m-2 p-2 px-4 bg-highlightedbg rounded-full">
            <input type="radio" id="ContentTableName_Iframe" name="ContentTableName" value="FragmentIframe">
            <label for="ContentTableName_Iframe">Iframe</label>
        </div>
    
        <div class="m-2 p-2 px-4 bg-highlightedbg rounded-full">
            <input type="radio" id="ContentTableName_Image" name="ContentTableName" value="FragmentImage">
            <label for="ContentTableName_Image">Image</label>
        </div>
    
        <div class="m-2 p-2 px-4 bg-highlightedbg rounded-full">
            <input type="radio" id="ContentTableName_Link" name="ContentTableName" value="FragmentLink">
            <label for="ContentTableName_Link">Link</label>
        </div>
    
        <div class="m-2 p-2 px-4 bg-highlightedbg rounded-full">
            <input type="radio" id="ContentTableName_News" name="ContentTableName" value="FragmentNews">
            <label for="ContentTableName_News">News</label>
        </div>
    
        <div class="m-2 p-2 px-4 bg-highlightedbg rounded-full">
            <input type="radio" id="ContentTableName_Projectinfo" name="ContentTableName" value="FragmentProjectinfo">
            <label for="ContentTableName_Projectinfo">Project Info</label>
        </div>
    
        <div class="m-2 p-2 px-4 bg-highlightedbg rounded-full">
            <input type="radio" id="ContentTableName_Socials" name="ContentTableName" value="FragmentSocials">
            <label for="ContentTableName_Socials">Socials</label>
        </div>
    
        <div class="m-2 p-2 px-4 bg-highlightedbg rounded-full">
            <input type="radio" id="ContentTableName_Text" name="ContentTableName" value="FragmentText">
            <label for="ContentTableName_Text">Text</label>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    function handleFragmentTypeChange(value) {
        let fragmentType = value;
        let fragmentTypeDivs = document.getElementsByClassName('fragment-type');
        for (let i = 0; i < fragmentTypeDivs.length; i++) {
            fragmentTypeDivs[i].style.display = 'none';
            let inputs = fragmentTypeDivs[i].querySelectorAll('input,textarea');
            for (let j = 0; j < inputs.length; j++) {
                inputs[j].required = false;
                inputs[j].classList.add('requiredIfSelected');
            }
        }
        let fragmentTypeDiv = document.getElementById(fragmentType);
        fragmentTypeDiv.style.display = 'block';
        let inputs = fragmentTypeDiv.querySelectorAll('.requiredIfSelected');
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].required = true;
        }
    }

    let tablenames = document.getElementsByName('ContentTableName');
    tablenames.forEach(tablename => {
        tablename.addEventListener('change', (event) => {
            handleFragmentTypeChange(event.target.value);
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        handleFragmentTypeChange(tablenames[0].value);
    });
<?php echo '</script'; ?>
>
<?php }
}
