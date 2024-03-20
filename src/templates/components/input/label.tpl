{if !isset($text)}
    {assign var="text" value=$for}
{/if}
{if !isset($required)}
    {assign var="required" value=false}
{/if}

<label for="{$for}" class="uppercase text-sm font-extrabold">{$text}
    {if $required}
        <span class="text-warn">*</span>
    {/if}
</label>