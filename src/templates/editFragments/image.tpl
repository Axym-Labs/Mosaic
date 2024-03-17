{if (isset($fragmentContent))}
<div>
    {if GenericRender::InsertValuePlainly($fragmentContent, 'ImageContent') != ""}
        <img class="w-12 h-12 inline-block" src="data:image/jpeg;base64,{GenericRender::InsertValuePlainly($fragmentContent, 'ImageContent', 'img')}" alt="Image content">
    {/if}
</div>
{/if}

<div>
  <label for="ImageContent">ImageContent:</label>
  <input type="file" id="fragment-FragmentImage-ImageContent" name="fragment-FragmentImage-ImageContent" accept=".jpg, .jpeg">
</div>

<div>
  <label for="Description">Description:</label>
  <textarea id="fragment-FragmentImage-Description" name="fragment-FragmentImage-Description">{if (isset($fragmentContent))}{GenericRender::InsertValuePlainly($fragmentContent, 'Description')}{/if}</textarea>
</div>