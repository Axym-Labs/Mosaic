{extends file='base/base.tpl'}
{block name=content}
{if !isset($isVisitingAccountPage)}
    {assign var="isVisitingAccountPage" value=false}
{/if}
{if !isset($isThisUser)}
    {assign var="isThisUser" value=false}
{/if}

{if $isVisitingAccountPage}
    <div>
        {include file="user/editUserComponent.tpl" userSubmitText="Update user" userIsUpdate=true}
    </div>
{else}
    {include file='user/userProfileWrapper.tpl'}
{/if}

{if $isVisitingAccountPage}
    <div class="flex justify-end">
        {include file="components/linkbutton.tpl" text="Logout" type="warn" route="/create/subsite"}
    </div>
{else}
    {if $isThisUser}
        <div class="flex justify-center">
            {include file="components/linkbutton.tpl" text="Manage your profile" type="primary" route="/a"}
        </div>
    {/if}
{/if}

{include file='user/subsiteList.tpl'}


{/block}
