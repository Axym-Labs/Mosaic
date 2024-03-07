{extends file='base/base.tpl'}
{block name=content}
test contents below:

{foreach from=$data item=fragment}
    <div class="fragment">
        {$fragment|escape}
    </div>
{/foreach}
{/block}
