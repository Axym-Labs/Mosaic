{if !isset($type)}
    {assign var="type" value="primary"}
{/if}

<a id="primary-button" 
    href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}{$route}" 
    class="inline-block font-extrabold p-1.5 px-3 md:px-4 m-1.5 md:m-3 shadow-lg transition duration-500 ease-in-out mr-3 hover:shadow-lg text-black text-extrabold 
    bg-{if $type == "primary"}primary border-2 border-primary text-b600{elseif $type == "secondary"}secondary border-2 border-secondary{elseif $type == "soft"}neutral-900 border-2 border-neutral-700{elseif $type == "warn"}warnSoft border-2 border-warn{/if}">
    <p class="">
        {$text}
    </p>
</a>