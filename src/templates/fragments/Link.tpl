
link

<div class="bg-gray-100 p-4 rounded-md">
    <div class="mb-4">
        <span class="font-bold">Title:</span>
        <p>{$fragmentContent["Title"]}</p>
    </div>
    <div class="mb-4">
        <span class="font-bold">Link:</span>
        <a href="{$fragmentContent['Link']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["Link"]}</a>
    </div>
</div>




{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
