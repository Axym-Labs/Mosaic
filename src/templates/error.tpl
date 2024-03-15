{extends file='base/base.tpl'}
{block name=content}


<div class="flex justify-center">
    <div class="">
        <p class="text text-neutral-400 uppercase">
            {$errorTitle}
        </p>
        <h1 class="text-2xl md:text-3xl font-semibold">
            {$Error nofilter}
        </h1>
        {include file="components/linkbutton.tpl" text="Back to home" route="/" type="primary"}
    </div>
</div>

{/block}