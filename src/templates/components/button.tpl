{if !isset($type)}
    {assign var="type" value="primary"}
{/if}

<button onclick="{$onclick}" class="p-2 px-4 m-2 md:m-2 text-extrabold text-sm shadow-lg text-black transition duration-500 ease-in-out mr-3 hover:shadow-lg hover:shadow-{if $type == "primary"}primarySoft bg-primary{elseif $type == "secondary"}secondarySoft bg-secondary{elseif $type == "soft"}neutral-800 bg-neutral-800{elseif $type == "warn"}red-900 bg-red-700{/if}">
    {$text}
</button>