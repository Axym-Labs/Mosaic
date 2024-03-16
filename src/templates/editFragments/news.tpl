
<div>
    <label for="fragment-FragmentNews-Title">Title:</label>
    <input type="text" id="fragment-FragmentNews-Title" name="fragment-FragmentNews-Title" required {GenericRender::InsertValueAttribute($fragmentContent, 'Title')}>
</div>

<div>
    <label for="fragment-FragmentNews-Description">Description:</label>
    <textarea id="fragment-FragmentNews-Description" name="fragment-FragmentNews-Description" required {GenericRender::InsertValueAttribute($fragmentContent, 'Description')}></textarea>
</div>

<div>
    <label for="fragment-FragmentNews-Link">Link:</label>
    <input type="text" id="fragment-FragmentNews-Link" name="fragment-FragmentNews-Link" {GenericRender::InsertValueAttribute($fragmentContent, 'Link')}>
</div>

<div>
    <label for="fragment-FragmentNews-LinkDescription">LinkDescription:</label>
    <input type="text" id="fragment-FragmentNews-LinkDescription" name="fragment-FragmentNews-LinkDescription" {GenericRender::InsertValueAttribute($fragmentContent, 'LinkDescription')}>
</div>