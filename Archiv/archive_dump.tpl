{if $BusinessConstants::$HOSTMODE == "dev"}
    <h1 class="text-center text-3xl font-bold">Test: retrieve users</h1>
    <br>
    {foreach from=$users item=user}
        {include file='user/userProfileWrapper.tpl'}
    {/foreach}
{/if}