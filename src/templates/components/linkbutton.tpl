<a id="primary-button" 
    href="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}{$route}" 
    class="inline-block rounded-full p-2 px-6 m-2 md:m-2 text-sm text-white shadow-lg transition duration-500 ease-in-out mr-3 hover:shadow-lg 
    backdrop-opacity-50 hover:backdrop-opacity-60
    hover:bg-{if $type == "primary"}primarySoft border-2 border-primary text-b600{elseif $type == "secondary"}secondarySoft border-2 border-secondary{elseif $type == "soft"}neutral-900 border-2 border-neutral-700{elseif $type == "warn"}warnSoft border-2 border-warn{/if}">
    <p class="text-white">
        {$text}
    </p>
</a>