
{foreach from=$fragments item=fragment}
    <div class="p-4 bg-highlightedbg shadow-lg my-4 rounded-xl">
        {$fragment nofilter}
    </div>
{foreachelse}
<div>
    <h1>
        Nothing here yet.
    </h1>
</div>
{/foreach}
