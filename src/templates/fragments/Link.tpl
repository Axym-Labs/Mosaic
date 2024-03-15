
link

<div class="bg-gray-100 p-4 rounded-md">
    <div class="mb-4">
        <a href="{$fragmentContent['Link']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["Title"]}</a>
    </div>
</div>




{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
