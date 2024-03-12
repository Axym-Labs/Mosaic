{if !isset($canEdit)}
    {assign var="canEdit" value=false}
{/if}

<div>
    <h1 class="text-3xl md:text-4xl font-extrabold intertight">{$user["Username"]}</h1>
</div>

<div>
    {GenericRender::RenderDict($user, $userColumnTypeData)|escape}
</div>

<div>
    <h1 class="text-3xl font-bold text-primary">{$user["LastName"]}</h1>
</div>