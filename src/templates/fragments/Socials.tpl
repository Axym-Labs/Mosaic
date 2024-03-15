
socials

<div class="bg-gray-100 p-4 rounded-md">
    {if $fragmentContent["GithubLink"]}
        <div class="mb-4">
            <span class="font-bold">Github:</span>
            <a href="{$fragmentContent['GithubLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["GithubLink"]}</a>
        </div>
    {/if}
    {if $fragmentContent["GitlabLink"]}
        <div class="mb-4">
            <span class="font-bold">Gitlab:</span>
            <a href="{$fragmentContent['GitlabLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["GitlabLink"]}</a>
        </div>
    {/if}
    {if $fragmentContent["XLink"]}
        <div class="mb-4">
            <span class="font-bold">X:</span>
            <a href="{$fragmentContent['XLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["XLink"]}</a>
        </div>
    {/if}
    {if $fragmentContent["FacebookLink"]}
        <div class="mb-4">
            <span class="font-bold">Facebook:</span>
            <a href="{$fragmentContent['FacebookLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["FacebookLink"]}</a>
        </div>
    {/if}
    {if $fragmentContent["RedditLink"]}
        <div class="mb-4">
            <span class="font-bold">Reddit:</span>
            <a href="{$fragmentContent['RedditLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["RedditLink"]}</a>
        </div>
    {/if}
    {if $fragmentContent["DiscordLink"]}
        <div class="mb-4">
            <span class="font-bold">Discord:</span>
            <a href="{$fragmentContent['DiscordLink']}" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">{$fragmentContent["DiscordLink"]}</a>
        </div>
    {/if}
</div>


{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
