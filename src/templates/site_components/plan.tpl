
<div class="flex flex-col items-center justify-center">
    <div class="max-w-md border border-gray-300 rounded-md p-4 shadow-md">
        <div>
            <h2 class="text-lg font-bold mb-2">Product Information</h2>
            <div class="flex flex-col mb-2">
                <span>{$fragmentContent["Name"]}</span>
            </div>
            <div class="flex flex-col mb-2">
                <span>{$fragmentContent["Preis"]}</span>
            </div>
        </div>
        {if isset($extraFragmentContent)}
            {foreach $extraFragmentContent as $key => $value}
                <div class="mt-4">
                    <h2 class="text-lg font-bold mb-2">{$key}</h2>
                    <span>{$value}</span>
                </div>
            {/foreach}
        {/if}
    </div>
</div>


