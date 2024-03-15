{extends file='base/base.tpl'}
{block name=content}

<div>
    <form action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/create/user" method="POST">
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
        <input class="bg-bgcol border-b border-white" type="file" id="ProfilePicture" name="ProfilePicture" accept="image/*"><br>

        <label for="Username">Username:</label>
        <input class="bg-bgcol border-b border-white" type="text" id="Username" name="Username" required><br>
        
        {include file='components/submitbutton.tpl' text="Create User"}
    </form>
</div>



{/block}
