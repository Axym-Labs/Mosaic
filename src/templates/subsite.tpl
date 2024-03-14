{extends file='base/base.tpl'}
{block name=content}


<br>
<br>

{include file='larger_components/subsiteView.tpl'}

<br>
<br>

<h1>Data</h1>
{GenericRender::RenderDict($subsite, $subsiteColumnTypeData)}

{/block}
