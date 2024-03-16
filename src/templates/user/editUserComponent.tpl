{if !isset($userSubmitText)}
    {assign var="userSubmitText" value="Create user"}
{/if}
{if !isset($userIsUpdate)}
    {assign var="userIsUpdate" value=false}
{/if}
{if !isset($user)}
    {assign var="user" value=null}
{/if}

<div>
    <form action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}{if !$userIsUpdate}/create/user{else}/a{/if}" method="POST" enctype="multipart/form-data">
        <div>
            <label for="Email">Email:</label>
            <input class="bg-bgcol border-b border-white" type="text" id="Email" name="Email" required {GenericRender::InsertValueAttribute($user, 'Email')}>
        </div>
        
        <div>
            <label for="LastName">Last Name:</label>
            <input class="bg-bgcol border-b border-white" type="text" id="LastName" name="LastName" required {GenericRender::InsertValueAttribute($user, 'LastName')}>
        </div>
        
        <div>
            <label for="FirstName">First Name:</label>
            <input class="bg-bgcol border-b border-white" type="text" id="FirstName" name="FirstName" required {GenericRender::InsertValueAttribute($user, 'FirstName')}>
        </div>
        
        <div>
            <label for="ProfilePicture">Profile Picture:</label>
            {if GenericRender::InsertValuePlainly($user, 'ProfilePicture') != ""}
            <img class="w-12 h-12 inline-block" src="data:image/jpeg;base64,{GenericRender::InsertValuePlainly($user, 'ProfilePicture', 'img')}" alt="Profile picture">
            {/if}
            <br>
            <input class="bg-bgcol border-b border-white" type="file" id="ProfilePicture" name="ProfilePicture" accept=".jpg, .jpeg">
        </div>
        
        <div>
            <label for="Username">Username:</label>
            <input class="bg-bgcol border-b border-white" type="text" id="Username" name="Username" required {GenericRender::InsertValueAttribute($user, 'Username')}>
        </div>
        
        {if !$userIsUpdate}
        <div>
            <label for="Password">Password:</label>
            <input class="bg-bgcol border-b border-white" type="password" id="Password" name="Password" required>
        </div>
        <div>
            <label for="ConfirmPassword">Confirm password:</label>
            <input class="bg-bgcol border-b border-white" type="password" id="ConfirmPassword" name="ConfirmPassword" required>
        </div>
        {else}
        <div>
            <p1>
                Optional: Change password
            </p1>
            <div>
                <label for="NewPassword">New password:</label>
                <input class="bg-bgcol border-b border-white" type="password" id="NewPassword" name="NewPassword">
            </div>
            <div>
                <label for="ConfirmNewPassword">Confirm new password:</label>
                <input class="bg-bgcol border-b border-white" type="password" id="ConfirmNewPassword" name="ConfirmNewPassword">
            </div>
        </div>
        {/if}
        
        {if $userIsUpdate}
        <div>
            <label for="Password">Password:</label>
            <input class="bg-bgcol border-b border-white" type="password" id="Password" name="Password" required>
        </div>
        {/if}
        {include file='components/submitbutton.tpl' text=$userSubmitText type="primary"}
    </form>
</div>
