
<div>
    <label for="Title">Title:</label>
    <input type="text" id="fragment-FragmentLink-Title" name="fragment-FragmentLink-Title" required {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Title')}{/if}>
</div>

<div>
    <label for="Link">Link:</label>
    <input type="text" id="fragment-FragmentLink-Link" name="fragment-FragmentLink-Link" required {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Link')}{/if}>
</div>