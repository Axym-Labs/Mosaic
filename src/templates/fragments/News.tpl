
news

<div class="bg-gray-100 p-4 rounded-md">
    <div class="mb-4">
        <h2 class="text-xl font-bold mb-2">{$fragmentContent["Title"]}</h2>
        <p>{$fragmentContent["Description"]}</p>
    </div>
    <div class="mb-4">
        <span class="font-bold">Link:</span>
        <a href="{$fragmentContent['Link']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["Link"]}</a>
    </div>
    <div class="mb-4">
        <span class="font-bold">Date:</span>
        <span>{$fragmentContent["Date"]|date_format:"%B %e, %Y"}</span>
    </div>
</div>



{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
