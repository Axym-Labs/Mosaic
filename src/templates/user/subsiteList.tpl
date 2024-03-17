{if !isset($isVisitingAccountPage)}
    {assign var="isVisitingAccountPage" value=false}
{/if}

<div class="w-full">
    {foreach from=$subsites item=subsite}
        <div class="p-1 bg-highlightedbg m-4 rounded-xl w-full">
            <div class="m-2 flex justify-between">
                <h2 class="flex justify-center mx-4 items-center text-2xl text-white inline-block">
                    {if ($planperm["ShortLinkOption"] && $subsite["ShortRoute"] != "")}
                    <a class="hover:underline" href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/s/{$subsite["ShortRoute"]}">
                        {$subsite["Name"]} →
                    </a>
                    {else}
                    <a class="hover:underline" href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/u/{$user["Username"]}/{$subsite["Route"]}">
                        {$subsite["Name"]} →
                    </a>
                    {/if}
                </h2>
                <div class="block md:inline-block">
                    {if $isVisitingAccountPage}
                        {include file="components/linkbutton.tpl" text="Edit" type="primary" route="/edit/s/{$subsite["SubSiteId"]}"}
                        <form class="inline-block" method="POST" enctype="multipart/form-data" action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/delete/s/{$subsite['SubSiteId']}">
                            {include file="components/submitbutton.tpl" text="Delete" type="warn"}
                        </form>
                    {/if}
                </div>
            </div>
        </div>
    {/foreach}
    {if $isVisitingAccountPage}
        {include file="components/linkbutton.tpl" text="Create new subsite" type="primary" route="/create/subsite"}
    {/if}
</div>