{extends file='base/base.tpl'}
{block name=content}
{if !isset($canEdit)}
    {assign var="canEdit" value=false}
{/if}


{include file='user/userProfile.tpl' canEdit=$canEdit}

{/block}