{if !isset($text)}
    {assign var="text" value="Submit"}
{/if}
{if !isset($type)}
    {assign var="type" value="primary"}
{/if}

<input type="submit" value="{$text}" class="rounded-xl p-2 px-4 m-2 md:m-2 text-b700 text-sm text-white shadow-lg transition duration-500 ease-in-out mr-3 hover:shadow-lg hover:shadow-hover:shadow-{if $type == "primary"}primarySoft bg-primary{elseif $type == "secondary"}secondarySoft bg-secondary{elseif $type == "soft"}neutral-800 bg-neutral-800{elseif $type == "warn"}red-900 bg-red-700{/if}">