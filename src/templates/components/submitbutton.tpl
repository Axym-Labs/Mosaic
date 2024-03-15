{if !isset($text)}
    {assign var="text" value="Submit"}
{/if}

<input type="submit" class="rounded-xl p-2 px-4 m-2 md:m-2 text-b700 text-sm text-white shadow-lg transition duration-500 ease-in-out mr-3 hover:shadow-lg hover:shadow-primarySoft bg-primary">
    {$text}
</input>