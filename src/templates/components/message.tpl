<div class="md:text-sm flex justify-between items-center rounded-md backdrop-blur-lg	
    bg-{if $type == "primary"}primarySoft border-2 border-primary text-b600{elseif $type == "info"}secondarySoft border-2 border-secondary{elseif $type == "info2"}neutral-900 border-2 border-neutral-700{elseif $type == "warning"}warnSoft border-2 border-warn{elseif $type == "error"}warnSoft border-2 border-warn{/if}">
    <p class="p-4">
        {$message|escape}
    </p>
    <button class="inline-block p-4 px-6" onclick="this.parentElement.remove()">✔</button>
</div>