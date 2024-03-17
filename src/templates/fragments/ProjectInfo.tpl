
<div class=" p-4 rounded-md">
    <div class="mb-4">
        <h1>
            {$fragmentContent["Title"]}
        </h1>
        {if $fragmentContent["LogoBlob"]}
            <img src="data:image/jpeg;base64,{base64_encode($fragmentContent['LogoBlob'])}" alt="Logo" class="mb-2 rounded-lg">
        {/if}
        <p class="text-lg">{$fragmentContent["Description"]}</p>
    </div>
    <div class="mb-2">
        <a href="{$fragmentContent['CtaLink']}" class="text-blue-500 hover:underline ml-1" target="_blank" rel="noopener noreferrer">{$fragmentContent["CtaLinkDescription"]}</a>
    </div>
</div>
