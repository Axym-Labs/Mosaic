
<div>
    <label for="fragment-FragmentProjectinfo-Title">Title:</label>
    <input type="text" id="fragment-FragmentProjectinfo-Title" name="fragment-FragmentProjectinfo-Title" {GenericRender::InsertValueAttribute($fragmentContent, 'Title')}>
</div>

<div>
    <label for="fragment-FragmentProjectinfo-Description">Description:</label>
    <textarea id="fragment-FragmentProjectinfo-Description" name="fragment-FragmentProjectinfo-Description" {GenericRender::InsertValueAttribute($fragmentContent, 'Description')}></textarea>
</div>

<div>
    <label for="LogoBlob">Logo:</label>
    <input type="file" id="fragment-FragmentImage-LogoBlob" name="fragment-FragmentImage-LogoBlob" accept=".jpg, .jpeg" {GenericRender::InsertValueAttribute($fragmentContent, 'LogoBlob')}>
  </div>

<div>
    <label for="fragment-FragmentProjectinfo-CtaLink">CtaLink:</label>
    <input type="text" id="fragment-FragmentProjectinfo-CtaLink" name="fragment-FragmentProjectinfo-CtaLink" required {GenericRender::InsertValueAttribute($fragmentContent, 'CtaLink')}>
</div>

<div>
    <label for="fragment-FragmentProjectinfo-CtaLinkDescription">CtaLinkDescription:</label>
    <input type="text" id="fragment-FragmentProjectinfo-CtaLinkDescription" name="fragment-FragmentProjectinfo-CtaLinkDescription" {GenericRender::InsertValueAttribute($fragmentContent, 'CtaLinkDescription')}>
</div>
