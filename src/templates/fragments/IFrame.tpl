
iframe

<div class="bg-gray-100 p-4 rounded-md">
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">Title:</span>
        <span>{$fragmentContent["Title"]}</span>
    </div>
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">URL:</span>
        <span>{$fragmentContent["Url"]}</span>
    </div>
    {if $fragmentContent["MorePermissions"]}
        <div class="flex items-center mb-2">
            <span class="font-bold mr-2">Additional Permissions:</span>
            <span>Granted</span>
        </div>
    {/if}
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">Width:</span>
        <span>{$fragmentContent["Width"]} px</span>
    </div>
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">Height:</span>
        <span>{$fragmentContent["Height"]} px</span>
    </div>
</div>

{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
