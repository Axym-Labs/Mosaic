
projectinfo

<div class="bg-gray-100 p-4 rounded-md">
    <div class="mb-4">
        {if $fragmentContent["LogoBlob"]}
            <img src="data:image/jpeg;base64,{$fragmentContent['LogoBlob']}" alt="Logo" class="mb-2 rounded-lg">
        {/if}
        <p class="text-lg font-bold">{$fragmentContent["Description"]}</p>
    </div>
    <div class="mb-2">
        <span class="font-bold">Call to Action:</span>
        <a href="{$fragmentContent['CtaLink']}" class="text-blue-500 hover:underline ml-1" target="_blank" rel="noopener noreferrer">{$fragmentContent["CtaLinkDescription"]}</a>
    </div>
</div>



{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
