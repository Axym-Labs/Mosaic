{extends file='base/base.tpl'}
{block name=content}
{if !isset($isOwner)}
    {assign var="isOwner" value=false}
{/if}


{include file='user/userProfile.tpl'}

{include file='user/subsiteList.tpl'}

{if $isOwner}
    <a href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/logout">
        Logout
    </a>
{/if}

{/block}