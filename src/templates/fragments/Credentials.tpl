credentials

UserId,bigint(20)
ShowPersonalData,tinyint(1)

{GenericRender::RenderDict($fragmentContent, $fragmentColumnTypeData)}

{$fragmentContent["ShowPersonalData"]}
<br>
<br>
{GenericRender::RenderDictAsText($extraFragmentContent)}

