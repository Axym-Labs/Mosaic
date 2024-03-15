{extends file='base/base.tpl'}
{block name=content}
{assign var="subsiteId" value=$subsite["SubSiteId"]}

<div class="lg:grid lg:grid-cols-2 gap-8">
    <div>
        {foreach from=$editFragments item=editFragment}
            <div class="p-4 border-2 border-primary m-4 rounded-xl">
                <form method="post" action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/edit/s/{$subsiteId}/update-f/{$editFragment['SubsiteCfContent']['SubsiteContentFragmentId']}">
                    {include file="fragment_components/editContentFragment.tpl" subsiteCf=$editFragment["SubsiteCfContent"]}
                    {$editFragment["FragmentContent"] nofilter}
                    {include file="components/submitbutton.tpl" text="Update" type="primary"}
                </form>
                <form method="post" action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/edit/s/{$subsiteId}/delete-f/{$editFragment['SubsiteCfContent']['SubsiteContentFragmentId']}">
                    {include file="components/submitbutton.tpl" text="Delete" type="warn"}
                </form>
            </div>
            {foreachelse}
            <div>
                <h1>
                    Nothing here yet.
                </h1>
            </div>
        {/foreach}
        {include file="components/linkbutton.tpl" text="Create fragment" route="/edit/s/$subsiteId/create-f" type="primary"}
        {if $editFragments}
        {/if}
    </div>
    <div>
    {include file='site_components/subsiteView.tpl'}
    </div>
</div>

{/block}