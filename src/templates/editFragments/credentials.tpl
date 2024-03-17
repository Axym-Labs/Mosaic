
<div>
    <label for="Username">Username:</label>
    <input type="text" id="Username" name="Username" required {if (isset($extraFragmentContent))}{GenericRender::InsertValueAttribute($extraFragmentContent, 'Username')}{/if}>
</div>
<!-- <div>
    <input type="checkbox" id="fragment-FragmentCredentials-ShowPersonalData" name="fragment-FragmentCredentials-ShowPersonalData" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'ShowPersonalData')}{/if}>
    <label for="ShowPersonalData">ShowPersonalData</label>
</div> -->
