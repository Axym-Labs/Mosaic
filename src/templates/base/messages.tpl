
{if isset($notifier)}
    <div class="sticky right-6 bottom-6 w-64 md:w-96" style="position:fixed;">
        {foreach from=$notifier->GetMessages(true) item=message}
            {include file="components/message.tpl" message=$message["message"] type=$message["messageType"]}
        {/foreach}
    </div>
{/if}