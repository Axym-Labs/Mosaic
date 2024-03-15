{extends file='base/base.tpl'}
{block name=content}

<form method="post" action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/create/subsite">
    Name,varchar(50)
    Route,varchar(50)
    
    
    ShortRoute,varchar(50)

</form>

{/block}