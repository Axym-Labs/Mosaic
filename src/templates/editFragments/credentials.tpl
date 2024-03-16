
<div>
    <label for="Username">Username:</label>
    <input type="text" id="Username" name="Username" required {GenericRender::InsertValueAttribute($fragmentContent, 'Username')}>
</div>
<div>
    <label for="ShowPersonalData">ShowPersonalData:</label>
    <input type="checkbox" id="fragment-FragmentCredentials-ShowPersonalData" name="fragment-FragmentCredentials-ShowPersonalData" {GenericRender::InsertValueAttribute($fragmentContent, 'ShowPersonalData')}>
</div>
