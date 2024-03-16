

<div>
    <label for="Title">Title:</label>
    <input type="text" id="fragment-FragmentIframe-Title" name="fragment-FragmentIframe-Title" {GenericRender::InsertValueAttribute($fragmentContent, 'Title')}>
  </div>
  
  <div>
    <label for="Url">Url:</label>
    <input type="text" id="fragment-FragmentIframe-Url" name="fragment-FragmentIframe-Url" required {GenericRender::InsertValueAttribute($fragmentContent, 'Url')}>
  </div>
  
  <div>
    <label for="MorePermissions">MorePermissions:</label>
    <input type="checkbox" id="fragment-FragmentIframe-MorePermissions" name="fragment-FragmentIframe-MorePermissions" value="1" {GenericRender::InsertValueAttribute($fragmentContent, 'MorePermissions')}>
  </div>
  
  <div>
    <label for="Width">Width:</label>
    <input type="number" id="fragment-FragmentIframe-Width" name="fragment-FragmentIframe-Width" {GenericRender::InsertValueAttribute($fragmentContent, 'Width')}>
  </div>
  
  <div>
    <label for="Height">Height:</label>
    <input type="number" id="fragment-FragmentIframe-Height" name="fragment-FragmentIframe-Height" {GenericRender::InsertValueAttribute($fragmentContent, 'Height')}>
  </div>