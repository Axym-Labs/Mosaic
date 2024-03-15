credentials

<div class="bg-gray-100 p-4 rounded-md">
    {if $fragmentContent["ProfilePicture"]}
        <div class="mt-4">
            <span class="font-bold">Profile Picture:</span>
            <img src="data:image/jpeg;base64,{$fragmentContent['ProfilePicture']}" alt="Profile Picture" class="w-32 h-32 mt-2 rounded-full">
        </div>
    {/if}
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">Username:</span>
        <span>{$fragmentContent["Username"]}</span>
    </div>
    <div class="flex items-center mb-2">
        <span>{$fragmentContent["FirstName"]}</span>
    </div>
    <div class="flex items-center mb-2">
        <span>{$fragmentContent["LastName"]}</span>
    </div>
    {if $fragmentContent["ShowPersonalData"]}
        <div class="flex items-center mb-2">
            <a href="mailto:{$extraFragmentContent["Email"]}">{$extraFragmentContent["Email"]}</a>
        </div>
    {/if}
</div>


{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}

{$fragmentContent["ShowPersonalData"]}
<br>
<br>
{GenericRender::RenderDictAsText($extraFragmentContent)}

