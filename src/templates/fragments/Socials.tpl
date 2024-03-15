

<div class=" p-4 rounded-md">
    {if $fragmentContent["GithubLink"]}
        <div class="mb-4">
            <span class="font-bold">Github:</span>
            <a href="{$fragmentContent['GithubLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Github</a>
        </div>
    {/if}
    {if $fragmentContent["GitlabLink"]}
        <div class="mb-4">
            <span class="font-bold">Gitlab:</span>
            <a href="{$fragmentContent['GitlabLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Gitlab</a>
        </div>
    {/if}
    {if $fragmentContent["XLink"]}
        <div class="mb-4">
            <span class="font-bold">X:</span>
            <a href="{$fragmentContent['XLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">X</a>
        </div>
    {/if}
    {if $fragmentContent["FacebookLink"]}
        <div class="mb-4">
            <span class="font-bold">Facebook:</span>
            <a href="{$fragmentContent['FacebookLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Facebook</a>
        </div>
    {/if}
    {if $fragmentContent["RedditLink"]}
        <div class="mb-4">
            <span class="font-bold">Reddit:</span>
            <a href="{$fragmentContent['RedditLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Reddit</a>
        </div>
    {/if}
    {if $fragmentContent["DiscordLink"]}
        <div class="mb-4">
            <span class="font-bold">Discord:</span>
            <a href="{$fragmentContent['DiscordLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Discord</a>
        </div>
    {/if}
</div>
