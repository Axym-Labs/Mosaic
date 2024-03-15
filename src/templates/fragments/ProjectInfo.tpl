
projectinfo

<div class="bg-gray-100 p-4 rounded-md">
    <div class="mb-4">
        <h2 class="text-xl font-bold mb-2"><a href="{$fragmentContent['Link']}" target="_blank" rel="noopener noreferrer">{$fragmentContent["Title"]} →</a></h2>
        <p>{$fragmentContent["Description"]}</p>
    </div>
    <div class="mb-4">
        <span class="font-bold">Date:</span>
        <span>{$fragmentContent["Date"]|date_format:"%B %e, %Y"}</span>
    </div>
</div>


{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
