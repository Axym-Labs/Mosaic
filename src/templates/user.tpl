{extends file='base/base.tpl'}
{block name=content}
{if !isset($isOwner)}
    {assign var="isOwner" value=false}
{/if}


{include file='user/userProfile.tpl'}

{include file='user/subsiteList.tpl'}

{/block}