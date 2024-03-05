{extends file='base/base.tpl'}
{block name=content}
<h1>{$title|escape}</h1>
{if $error}
<p class="error">{$error|escape}</p>
{/if}
{/block}
