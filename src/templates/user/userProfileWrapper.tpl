{if !isset($isVisitingAccountPage)}
    {assign var="isVisitingAccountPage" value=false}
{/if}


<div class="flex flex-col items-center justify-center">
    <div class="max-w-md rounded-md p-4 shadow-md">
        {include file="userProfile.tpl"}
    </div>
</div>
