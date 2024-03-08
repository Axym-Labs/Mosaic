{extends file='base/base.tpl'}
{block name=content}
<h1>{$title|escape}</h1>

{include file='components/linkbutton.tpl' text="Test 1" route="/" type="primary"}
{include file='components/linkbutton.tpl' text="Test 1" route="/" type="secondary"}
{include file='components/linkbutton.tpl' text="Test 1" route="/" type="soft"}
{include file='components/linkbutton.tpl' text="Test 1" route="/" type="warn"}

{if $BusinessConstants::$HOSTMODE == "dev"}
    {foreach from=$users item=user}
        {include file='user.tpl' user=$user}
    {/foreach}
{/if}

{/block}
