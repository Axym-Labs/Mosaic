{extends file='base/base.tpl'}
{block name=content}
{$canEdit|default:false}

<div>
    <h1>{$user["Username"]}</h1>
</div>

<div>
    {GenericRender::RenderDict($user)}
</div>


{/block}