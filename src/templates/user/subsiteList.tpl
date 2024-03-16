{if !isset($isVisitingAccountPage)}
    {assign var="isVisitingAccountPage" value=false}
{/if}

<div class="w-full">
    {foreach from=$subsites item=subsite}
        <div class="p-4 border-2 border-primary m-4 rounded-xl w-full">
            <h2>{$subsite["Name"]}</h2>
            <p>Route: <a class="underline" href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/u/{$user["Username"]}/{$subsite["Route"]}">{$subsite["Route"]}</a></p>
            {if ($planperm["ShortLinkOption"] && $isVisitingAccountPage) || !$isVisitingAccountPage}
            <p>Short route (pro): <a class="underline" href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/s/{$subsite["ShortRoute"]}">{$subsite["Route"]}</a></p>
            {/if}
            {if $isVisitingAccountPage}
                {include file="components/linkbutton.tpl" text="Edit" type="primary" route="/edit/s/{$subsite["SubSiteId"]}"}
                <form method="POST" action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/delete/s/{$subsite['SubSiteId']}">
                    {include file="components/submitbutton.tpl" text="Delete" type="warn"}
                </form>
            {/if}
        </div>
    {/foreach}
    {if $isVisitingAccountPage}
        {include file="components/linkbutton.tpl" text="Create new subsite" type="primary" route="/create/subsite"}
    {/if}
</div>