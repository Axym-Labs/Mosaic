{if !isset($required)}
    {assign var="required" value=false}
{/if}
{if !isset($type)}
    {assign var="type" value="text"}
{/if}
{if !isset($otherAttributes)}
    {assign var="otherAttributes" value=""}
{/if}
{if !isset($class)}
    {assign var="class" value=""}
{/if}
{if !isset($value)}
    {assign var="value" value=""}
{/if}

<input 
    class="text-lg text-white p-2 m-1.5 px-6 bg-gray-800 {if $type != 'file'}rounded-full{else}rounded-xl pr-12{/if} w-64 focus:bg-primarySoft transform transition duration-500 ease-in-out
    file:ml-0 file:uppercase file:text-sm file:font-bold file:px-12 file:py-12 file:pl-6 file:my-2 file:mr-6 file:pr-14 file:rounded-xl file:border-0 hover:file:cursor-pointer file:bg-transparent file:text-primary hover:file:bg-primarySoft file:transform file:transition file:duration-500 file:ease-in-out
    {$class}"
    type="{$type}" id="{$id}" name="{$id}" 
    {if isset($placeholder)}placeholder="{$placeholder}"{/if} 
    {if $required}required{/if} 
    {$value} 
    {$otherAttributes}>