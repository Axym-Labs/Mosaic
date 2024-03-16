
<div>
  <label for="ImageContent">ImageContent:</label>
  <input type="file" id="fragment-FragmentImage-ImageContent" name="fragment-FragmentImage-ImageContent" accept=".jpg, .jpeg">
</div>

<div>
    {if GenericRender::InsertValuePlainly($fragmentContent, 'ImageContent') != ""}
        <img class="w-12 h-12 inline-block" src="data:image/jpeg;base64,{GenericRender::InsertValuePlainly($fragmentContent, 'ImageContent', 'img')}" alt="Image content">
    {/if}
</div>

<div>
  <label for="Description">Description:</label>
  <textarea id="fragment-FragmentImage-Description" name="fragment-FragmentImage-Description" {GenericRender::InsertValueAttribute($fragmentContent, 'Description')}></textarea>
</div>