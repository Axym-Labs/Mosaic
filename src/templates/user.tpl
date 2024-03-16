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
    {include file='user/userProfile.tpl'}
{/if}

{if $isVisitingAccountPage}
    {include file="components/linkbutton.tpl" text="Logout" type="warn" route="/create/subsite"}
{else}
    {if $isThisUser}
        {include file="components/linkbutton.tpl" text="Manage your profile" type="primary" route="/a"}
    {/if}
{/if}

{include file='user/subsiteList.tpl'}


{/block}
