{extends file='base/base.tpl'}
{block name=content}

<form>
    SubsiteContentFragmentId,bigint(20)
    BackgroundColor,varchar(6)
    Opacity,float
    ContentTableName,varchar(50) -> a radio field of available options
    BackgroundImage,blob

    js script here
    
    <div>
        editfragments input names and ids must be in the form of fragment-tablename-...
        <div class="fragment-type" id="credentials">
            {include file='editFragment/credentials.tpl'}
        </div>
        <div class="fragment-type" id="iframe">
            {include file='editFragment/iframe.tpl'}
        </div>
        <div class="fragment-type" id="image">
            {include file='editFragment/image.tpl'}
        </div>
        <div class="fragment-type" id="link">
            {include file='editFragment/link.tpl'}
        </div>
        <div class="fragment-type" id="news">
            {include file='editFragment/news.tpl'}
        </div>
        <div class="fragment-type" id="projectinfo">
            {include file='editFragment/projectinfo.tpl'}
        </div>
        <div class="fragment-type" id="socials">
            {include file='editFragment/socials.tpl'}
        </div>
        <div class="fragment-type" id="text">
            {include file='editFragment/text.tpl'}
        </div>
    
    </div>

</form>

{/block}
