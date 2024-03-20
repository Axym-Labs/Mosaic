

<div class=" p-4 rounded-md">
    {if $fragmentContent["GithubLink"] && $fragmentContent["GithubLink"] != "NULL"}
        <div class="mb-4">
            <a href="{$fragmentContent['GithubLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Github</a>
        </div>
    {/if}
    {if $fragmentContent["GitlabLink"] && $fragmentContent["GitlabLink"] != "NULL"}
        <div class="mb-4">
            <a href="{$fragmentContent['GitlabLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Gitlab</a>
        </div>
    {/if}
    {if $fragmentContent["XLink"] && $fragmentContent["XLink"] != "NULL"}
        <div class="mb-4">
            <a href="{$fragmentContent['XLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">X</a>
        </div>
    {/if}
    {if $fragmentContent["FacebookLink"] && $fragmentContent["FacebookLink"] != "NULL"}
        <div class="mb-4">
            <a href="{$fragmentContent['FacebookLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Facebook</a>
        </div>
    {/if}
    {if $fragmentContent["RedditLink"] && $fragmentContent["RedditLink"] != "NULL"}
        <div class="mb-4">
            <a href="{$fragmentContent['RedditLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Reddit</a>
        </div>
    {/if}
    {if $fragmentContent["DiscordLink"] && $fragmentContent["DiscordLink"] != "NULL"}
        <div class="mb-4">
            <a href="{$fragmentContent['DiscordLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Discord</a>
        </div>
    {/if}
</div>
