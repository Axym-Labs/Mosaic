{extends file='base/base.tpl'}
{block name=content}
<h1>{$title|escape}</h1>


<div class="flex justify-center">
    <h1 class="text-3xl font-bold">Created Subsites: {$subsiteCount}</h1>
</div>

{include "site_components/planOverview.tpl" plans=$plans}



{/block}
