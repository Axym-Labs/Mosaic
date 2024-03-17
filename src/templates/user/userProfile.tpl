<div class="mb-4">
    <h2 class="text-lg font-bold mb-2">User Information</h2>
    <div class="flex flex-col mb-2">
        <span>{$user["Email"]}</span>
    </div>
    <div class="flex flex-col mb-2">
        <span>{$user["LastName"]}</span>
    </div>
    <div class="flex flex-col mb-2">
        <span>{$user["FirstName"]}</span>
    </div>
    <div class="flex flex-col mb-2">
        <span>{$user["Username"]}</span>
    </div>
</div>
{if isset($user["ProfilePicture"]) && $user["ProfilePicture"] != ""}
    <div class="mb-4">
        <img class="w-20 h-20 rounded-2xl border-2 border-highlightedbg" src="data:image/jpeg;base64,{base64_encode($user['ProfilePicture'])}" alt="Profile Picture" class="max-w-full h-auto">
    </div>
{/if}