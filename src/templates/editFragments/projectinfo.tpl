
<div>
    <label for="fragment-FragmentProjectinfo-Title">Title:</label>
    <input type="text" id="fragment-FragmentProjectinfo-Title" name="fragment-FragmentProjectinfo-Title" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'Title')}{/if}>
</div>

<div>
    <label for="fragment-FragmentProjectinfo-Description">Description:</label>
    <textarea id="fragment-FragmentProjectinfo-Description" name="fragment-FragmentProjectinfo-Description">{if (isset($fragmentContent))}{GenericRender::InsertValuePlainly($fragmentContent, 'Description')}{/if}</textarea>
</div>

<div>
    <label for="LogoBlob">Logo:</label>
    <input type="file" id="fragment-FragmentImage-LogoBlob" name="fragment-FragmentImage-LogoBlob" accept=".jpg, .jpeg">
    {if isset($fragmentContent["LogoBlob"])}
        <img src="data:image/jpeg;base64,{GenericRender::InsertValuePlainly($fragmentContent, 'LogoBlob', 'img')}" alt="Logo" class="mb-2 rounded-lg">
    {/if}
</div>

<div>
    <label for="fragment-FragmentProjectinfo-CtaLink">CtaLink:</label>
    <input type="text" id="fragment-FragmentProjectinfo-CtaLink" name="fragment-FragmentProjectinfo-CtaLink" required {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'CtaLink')}{/if}>
</div>

<div>
    <label for="fragment-FragmentProjectinfo-CtaLinkDescription">CtaLinkDescription:</label>
    <input type="text" id="fragment-FragmentProjectinfo-CtaLinkDescription" name="fragment-FragmentProjectinfo-CtaLinkDescription" {if (isset($fragmentContent))}{GenericRender::InsertValueAttribute($fragmentContent, 'CtaLinkDescription')}{/if}>
</div>
