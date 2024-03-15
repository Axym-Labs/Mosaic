
image


<div class="bg-gray-100 p-4 rounded-md">
    {if $fragmentContent["ImageContent"]}
        <div class="mb-4">
            <img src="data:image/jpeg;base64,{$fragmentContent['ImageContent']}" alt="Image" class="max-w-full h-auto rounded-lg">
        </div>
    {/if}
    <div class="mb-4">
        <span class="font-bold">Description:</span>
        <p>{$fragmentContent["Description"]}</p>
    </div>
</div>



{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
