
text

<div class="bg-gray-100 p-4 rounded-md">
    {if $fragmentContent["Text"]|strpos:"base64"}
        <img src="data:image/jpeg;base64,{$fragmentContent['Text']}" alt="Image" class="mb-4 rounded-lg">
    {else}
        <h2 class="text-xl font-bold mb-2">{$fragmentContent["Title"]}</h2>
        <p>{$fragmentContent["Text"]}</p>
    {/if}
</div>


{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
