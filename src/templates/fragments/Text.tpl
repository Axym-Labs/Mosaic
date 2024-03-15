
text

<div class="bg-gray-100 p-4 rounded-md">
    <h2 class="text-xl font-bold mb-2">{$fragmentContent["Title"]}</h2>
    <p>{$fragmentContent["Text"]}</p>
</div>


{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
