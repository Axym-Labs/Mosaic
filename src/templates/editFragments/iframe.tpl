

<div>
    <label for="Title">Title:</label>
    <input type="text" id="fragment-FragmentIframe-Title" name="fragment-FragmentIframe-Title" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Title')}{/if}>
</div>

<div>
    <label for="Url">Url:</label>
    <input type="text" id="fragment-FragmentIframe-Url" name="fragment-FragmentIframe-Url" required {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Url')}{/if}>
</div>

<div>
    <label for="MorePermissions">MorePermissions:</label>
    <input type="checkbox" id="fragment-FragmentIframe-MorePermissions" name="fragment-FragmentIframe-MorePermissions" value="1" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'MorePermissions')}{/if}>
</div>

<div>
    <label for="Width">Width:</label>
    <input type="number" id="fragment-FragmentIframe-Width" name="fragment-FragmentIframe-Width" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Width')}{/if}>
</div>

<div>
    <label for="Height">Height:</label>
    <input type="number" id="fragment-FragmentIframe-Height" name="fragment-FragmentIframe-Height" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Height')}{/if}>
</div>
