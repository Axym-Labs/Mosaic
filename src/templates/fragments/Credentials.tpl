
{include file="../user/userProfile.tpl" user=$extraFragmentContent}

<!-- <div class=" p-4 rounded-md">
    {if $extraFragmentContent["ProfilePicture"]}
        <div class="mt-4">
            <span class="font-bold">Profile Picture:</span>
            <img src="data:image/jpeg;base64,{$extraFragmentContent['ProfilePicture']}" alt="Profile Picture" class="w-32 h-32 mt-2 rounded-full">
        </div>
    {/if}
    <div class="flex items-center mb-2">
        <span class="font-bold mr-2">Username:</span>
        <span>{$extraFragmentContent["Username"]}</span>
    </div>
    <div class="flex items-center mb-2">
        <span>{$extraFragmentContent["FirstName"]}</span>
    </div>
    <div class="flex items-center mb-2">
        <span>{$extraFragmentContent["LastName"]}</span>
    </div>
    {if $fragmentContent["ShowPersonalData"]}
        <div class="flex items-center mb-2">
            <a href="mailto:{$extraFragmentContent["Email"]}">{$extraFragmentContent["Email"]}</a>
        </div>
    {/if}
</div> -->
