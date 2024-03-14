{extends file='base/base.tpl'}
{block name=content}


<div class="lg:grid lg:gird-cols-2 gap-8">
    <div>
        {foreach from=$editFragments item=editFragment}
            <div class="p-4 border-2 border-primary m-4 rounded-xl">
                [development info: EDIT-FRAGMENT]
                {$editFragment nofilter}
            </div>
            {foreachelse}
            <div>
                <h1>
                    Nothing here yet.
                </h1>
            </div>
        {/foreach}
    </div>
    <div>
    {include file='larger_components/subsiteView.tpl'}
    </div>
</div>

{/block}