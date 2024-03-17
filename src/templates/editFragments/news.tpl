
<div>
    <label for="fragment-FragmentNews-Title">Title:</label>
    <input type="text" id="fragment-FragmentNews-Title" name="fragment-FragmentNews-Title" required {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Title')}{/if}>
</div>

<div>
    <label for="fragment-FragmentNews-Description">Description:</label>
    <textarea id="fragment-FragmentNews-Description" name="fragment-FragmentNews-Description" required>{if (isset($fragmentContent))}{GenericRender::InsertValuePlainly($fragmentContent, 'Description')}{/if}</textarea>
</div>

<div>
    <label for="fragment-FragmentNews-Link">Link:</label>
    <input type="text" id="fragment-FragmentNews-Link" name="fragment-FragmentNews-Link" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Link')}{/if}>
</div>

<div>
    <label for="fragment-FragmentNews-LinkDescription">LinkDescription:</label>
    <input type="text" id="fragment-FragmentNews-LinkDescription" name="fragment-FragmentNews-LinkDescription" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'LinkDescription')}{/if}>
</div>