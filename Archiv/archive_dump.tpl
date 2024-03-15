{if $BusinessConstants::$HOSTMODE == "dev"}
    <h1 class="text-center text-3xl font-bold">Test: retrieve users</h1>
    <br>
    {foreach from=$users item=user}
        {include file='user/userProfile.tpl' user=$user userColumnTypeData=$userColumnTypeData}
    {/foreach}
{/if}