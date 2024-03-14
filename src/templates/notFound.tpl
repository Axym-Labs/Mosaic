{extends file='base/base.tpl'}
{block name=content}


<div class="flex justify-center">
    <div class="">
        <p class="text text-neutral-400 uppercase">
            404 Not Found
        </p>
        <h1 class="text-2xl md:text-3xl font-semibold">
            {$NotFoundError|escape}
        </h1>
    </div>
</div>

{/block}