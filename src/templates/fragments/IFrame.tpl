
iframe

<iframe class="bg-gray-100 p-4 rounded-md" src="{$fragmentContent['Url']}" width="{$fragmentContent['Width']}" height="{$fragmentContent['Height']}"
    {if $fragmentContent['MorePermissions']} scrolling="yes" allowpopups="true" allowscripting="true"{else} scrolling="no" allowpopups="false" allowscripting="false"{/if}>
    Your browser does not support iframes.
</iframe>

{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}
