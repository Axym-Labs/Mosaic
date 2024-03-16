
<div>
  <label for="ImageContent">ImageContent:</label>
  <input type="file" id="fragment-FragmentImage-ImageContent" name="fragment-FragmentImage-ImageContent" accept="image/jpeg" required {GenericRender::InsertValueAttribute($fragmentContent, 'ImageContent')}>
</div>

<div>
  <label for="Description">Description:</label>
  <textarea id="fragment-FragmentImage-Description" name="fragment-FragmentImage-Description" {GenericRender::InsertValueAttribute($fragmentContent, 'Description')}></textarea>
</div>