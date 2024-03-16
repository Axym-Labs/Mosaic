{if !isset($isVisitingAccountPage)}
    {assign var="isVisitingAccountPage" value=false}
{/if}


<div class="flex flex-col items-center justify-center">
    <div class="max-w-md border border-gray-300 rounded-md p-4 shadow-md">
        <div class="mb-4">
            <h2 class="text-lg font-bold mb-2">User Information</h2>
            <div class="flex flex-col mb-2">
                <span>{$fragmentContent["Email"]}</span>
            </div>
            <div class="flex flex-col mb-2">
                <span>{$fragmentContent["LastName"]}</span>
            </div>
            <div class="flex flex-col mb-2">
                <span>{$fragmentContent["FirstName"]}</span>
            </div>
            <div class="flex flex-col mb-2">
                <span>{$fragmentContent["Username"]}</span>
            </div>
        </div>
        {if isset($fragmentContent["ProfilePicture"]) && $fragmentContent["ProfilePicture"] neq ''}
            <div class="mb-4">
                <img src="data:image/jpeg;base64,{$fragmentContent["ProfilePicture"]}" alt="Profile Picture" class="max-w-full h-auto">
            </div>
        {/if}
        {if isset($extraFragmentContent)}
            {foreach $extraFragmentContent as $key => $value}
                <div class="mb-4">
                    <h2 class="text-lg font-bold mb-2">{$key}</h2>
                    <span>{$value}</span>
                </div>
            {/foreach}
        {/if}
    </div>
</div>
