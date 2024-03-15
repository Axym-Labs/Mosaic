{extends file='base/base.tpl'}
{block name=content}
<h1>{$title|escape}</h1>

{include file='components/linkbutton.tpl' text="Test 1" route="/" type="primary"}
{include file='components/linkbutton.tpl' text="Test 1" route="/" type="secondary"}
{include file='components/linkbutton.tpl' text="Test 1" route="/" type="soft"}
{include file='components/linkbutton.tpl' text="Test 1" route="/" type="warn"}

<div class="flex justify-center">
    <h1 class="text-3xl font-bold">Created Subsites: {$subsiteCount}</h1>
</div>

{include "site_components/planOverview.tpl" plans=$plans planperms=$planperms planColumnTypeData=$planColumnTypeData planpermColumnTypeData=$planpermColumnTypeData}


{/block}
