
<div class="w-full">
    {foreach from=$subsites item=subsite}
        <div class="p-4 border-2 border-primary m-4 rounded-xl w-full">
            <h2>{$subsite["Name"]}</h2>
            <p>Route: <a href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/u/{$user["Username"]}/{$subsite["Route"]}">{$subsite["Route"]}</a></p>
            <p>Short route (pro): <a href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/s/{$subsite["ShortRoute"]}">{$subsite["Route"]}</a></p>
            {if isOwner}
                <p>Edit: <a href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/edit/s/{$subsite["SubSiteId"]}">Subsite</a></p>
            {/if}
        </div>
    {/foreach}
</div>