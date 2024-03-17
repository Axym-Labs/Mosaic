
<div class="flex justify-center">
    <div style="max-width: 1000px">
        {foreach from=$fragments item=fragment}
            <div class="p-4 bg-highlightedbg shadow-lg my-4 rounded-xl" style="
                {if ($fragment['subsiteCf']['BackgroundColor'] != 'NULL' && $fragment['subsiteCf']['BackgroundColor'] != '')}background-color: {GenericRender::HexToRGB($fragment['subsiteCf']['BackgroundColor'], $fragment['subsiteCf']['Opacity'])};{/if}
                {if ($fragment['subsiteCf']['BackgroundImage'] != 'NULL' && $fragment['subsiteCf']['BackgroundImage'] != '')}background-image: url('data:image/jpeg;base64,{GenericRender::InsertValuePlainly($fragment['subsiteCf'], 'BackgroundImage', 'img')}');{/if}
                ">
                <!-- <img class="h-12 inline-block" src="data:image/jpeg;base64,{GenericRender::InsertValuePlainly($fragment['subsiteCf'], 'BackgroundImage', 'img')}" alt="Background Image"> -->
                {$fragment["Content"] nofilter}
            </div>
        {foreachelse}
            {include file="components/empty.tpl"}
        {/foreach}
    </div>
</div>
