
<div>
    <label for="fragment-FragmentText-Title">Title:</label>
    <input type="text" id="fragment-FragmentText-Title" name="fragment-FragmentText-Title" required {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Title')}{/if}>
</div>

<div>
    <label for="fragment-FragmentText-Text">Text:</label>
    <input type="text" id="fragment-FragmentText-Text" name="fragment-FragmentText-Text" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Text')}{/if}>
</div>
