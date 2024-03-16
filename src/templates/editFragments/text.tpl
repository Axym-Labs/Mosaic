
<div>
    <label for="fragment-FragmentText-Title">Title:</label>
    <input type="text" id="fragment-FragmentText-Title" name="fragment-FragmentText-Title" required {GenericRender::InsertValueAttribute($fragmentContent, 'Title')}>
</div>

<div>
    <label for="fragment-FragmentText-Text">Text:</label>
    <input type="text" id="fragment-FragmentText-Text" name="fragment-FragmentText-Text" {GenericRender::InsertValueAttribute($fragmentContent, 'Text')}>
</div>
