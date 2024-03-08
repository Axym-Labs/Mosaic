{extends file='base/base.tpl'}
{block name=content}


<br>
<br>

{foreach from=$fragments item=fragment}
    <div class="p-4 border-2 border-primary m-4 rounded-xl">
        {$fragment nofilter}
    </div>
{/foreach}

<br>
<br>

<h1>Data</h1>
{GenericRender::RenderDict($subsite, $subsiteColumnTypeData)}

{/block}
