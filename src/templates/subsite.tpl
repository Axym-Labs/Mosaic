{assign var="subsiteNav" value=true}
{assign var="withFooter" value=false}
{extends file='base/base.tpl'}
{block name=content}

{include file='site_components/subsiteView.tpl'}

<div class="h-32 w-full flex justify-center mt-16 md:mt-32">
    <div class="">
        <p class="text-center">
            This subsite was created by {ucfirst($owner["FirstName"])} {ucfirst($owner["LastName"])}.
            <br>
            {include file="components/textlink.tpl" text="Create your own subsite with Mosaic →" route="/create/account" class="font-bold"}
        </p>
    </div>
</div>

{if $isOwner}
    {assign var="subsiteId" value=$subsite['SubSiteId']}
    <div class="flex justify-center">
        {include file="components/linkbutton.tpl" text="Edit your subsite" route="/edit/s/$subsiteId" type="primary"}
    </div>
{/if}

<!-- <div class="">
    <div class="max-w-md p-6 bg-highlightedbg rounded-xl shadow-lg">
        <div>
            <p class="text-lg font-bold mb-4">Page Information</p>
            <div class="flex justify-between mb-2">
                <p>Name:</p>
                <p>{$subsite["Name"]}</p>
            </div>
            <div class="flex justify-between mb-2">
                <p>Route:</p>
                <p>{$subsite["Route"]}</p>
            </div>
            {if $subsite["ShortRoute"] != ""}
            <div class="flex justify-between mb-2">
                <p>ShortRoute:</p>
                <p>{$subsite["ShortRoute"]}</p>
            </div>
            {/if}
        </div>
    </div>
</div> -->



{/block}
