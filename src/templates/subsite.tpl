{extends file='base/base.tpl'}
{block name=content}


<br>
<br>

{include file='site_components/subsiteView.tpl'}

<br>
<br>

<div class="">
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
</div>



{/block}
