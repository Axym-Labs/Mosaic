{if !isset($fixed)}
    {assign var="fixed" value=false}
{/if}

{if $fixed}
    <p class="backdrop-blur-lg bg-calloutbg p-3 px-6 pr-8 rounded-2xl text-gray-100 shadow-lg">
        <span class="text-lg text-white">💡</span> {$text}
    </p>
{else}
    <div class="group">
        <div class="p-3 hover:cursor-pointer">
            <span class="text-lg text-white">💡</span>
        </div>
        <div class="backdrop-blur-lg z-10 hidden group-hover:block group-hover:absolute bg-calloutbg p-3 px-6 rounded-2xl shadow-2xl text-gray-100">
            {$text}
        </div>
    </div>
{/if}