{if !isset($subsiteSubmitText)}
    {assign var="subsiteSubmitText" value="Create subsite"}
{/if}
{if !isset($subsiteIsUpdate)}
    {assign var="subsiteIsUpdate" value=false}
{/if}
{if !isset($subsite)}
    {assign var="subsite" value=null}
{/if}

<form method="post" action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}{if !$subsiteIsUpdate}/create/subsite{else}/edit/s/{$existingSubsiteId}{/if}">
    <div>
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" maxlength="50" placeholder="My subsite" required {GenericRender::InsertValueAttribute($subsite, 'Name')}>
    </div>
    <div>
        <label for="Route">Route:</label>
        <input type="text" id="Route" name="Route" maxlength="50" placeholder="Enter Route" required {GenericRender::InsertValueAttribute($subsite, 'Route')}>
    </div>

    {if $planperm["ShortLinkOption"]}
        <div>
            <label for="ShortRoute">Short Route:</label>
            <input type="text" id="ShortRoute" name="ShortRoute" maxlength="50" placeholder="Enter Short Route">
        </div>
    {/if}

    {include file="components/submitbutton.tpl" text=$subsiteSubmitText type="primary"}
</form>