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
        <table>
            <tr>
                <td class="p-3">
                    {include file="components/input/label.tpl" for="Email" required=true}
                </td>
                <td class="p-3">
                    {include file="components/input/input.tpl" type="email" id="Email" required=true value=GenericRender::InsertValueAttribute($user, 'Email')}
                </td>
            </tr>
            
            <tr>
                <td class="p-3">
                    {include file="components/input/label.tpl" for="FirstName" text="First name" required=true}
                </td>
                <td class="p-3">
                    {include file="components/input/input.tpl" id="FirstName" required=true value=GenericRender::InsertValueAttribute($user, 'FirstName')}                    
                </td>
            </tr>

            <tr>
                <td class="p-3">
                    {include file="components/input/label.tpl" for="LastName" text="Last name" required=true}
                </td>
                <td class="p-3">
                    {include file="components/input/input.tpl" id="LastName" required=true value=GenericRender::InsertValueAttribute($user, 'LastName')}
                </td>
            </tr>
            
            <tr>
                <td class="p-3">
                    {include file="components/input/label.tpl" for="ProfilePicture" text="Profile Picture"}
                </td>
                <td class="p-3">
                    {include file="components/input/input.tpl" type="file" id="ProfilePicture" otherAttributes="accept='.jpg, .jpeg'"}
                    {if GenericRender::InsertValuePlainly($user, 'ProfilePicture') != ""}
                    <img class="w-12 h-12 inline-block" src="data:image/jpeg;base64,{GenericRender::InsertValuePlainly($user, 'ProfilePicture', 'img')}" alt="Profile picture">
                    {/if}
                </td>
                <br>
            </tr>
            
            <tr>
                <td class="p-3">
                    {include file="components/input/label.tpl" for="Username" required=true}
                </td>
                <td class="p-3">
                    {include file="components/input/input.tpl" id="Username" required=true value=GenericRender::InsertValueAttribute($user, 'Username')}
                </td>
            </tr>
            
            {if !$userIsUpdate}
                <tr>
                    <td class="p-3">
                        {include file="components/input/label.tpl" for="Password" required=true}
                    </td>
                    <td class="p-3">
                        {include file="components/input/label.tpl" type="password" for="Password" required=true}
                    </td>
                </tr>
                <tr>
                    <td class="p-3">
                        {include file="components/input/label.tpl" for="ConfirmPassword" text="Confirm Password" required=true}
                    </td>
                    <td class="p-3">
                        {include file="components/input/input.tpl" type="password" id="ConfirmPassword" required=true}
                    </td>
                </tr>
            {else}
                <tr>
                    <td class="p-3">
                        <p>
                            Optional: Change password
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="p-3 pl-8">
                        <div class="">
                            {include file="components/input/label.tpl" for="NewPassword" text="New password"}
                        </div>
                    </td>
                    <td class="p-3">
                        {include file="components/input/input.tpl" type="password" id="NewPassword"}
                    </td>
                </tr>
                <tr>
                    <td class="p-3 pl-8">
                        <div class="">
                            {include file="components/input/label.tpl" for="ConfirmNewPassword" text="Confirm new password"}
                        </div>
                    </td>
                    <td class="p-3">
                        {include file="components/input/input.tpl" type="password" id="ConfirmNewPassword"}
                    </td>
                </tr>
            {/if}
            {if $userIsUpdate}
                <tr>
                    <td class="p-3">
                        {include file="components/input/label.tpl" for="Password" text="Current password" required=true}
                    </td>
                    <td class="p-3">
                        {include file="components/input/input.tpl" type="password" id="Password" required=true}
                    </td>
                </tr>
            {/if}
            <tr>
                <td class="p-3">
                    {include file='components/submitbutton.tpl' text=$userSubmitText type="primary"}
                </td>
            </tr>
        </table>
    </form>
</div>
