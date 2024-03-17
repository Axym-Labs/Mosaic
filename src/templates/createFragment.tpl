{extends file='base/base.tpl'}
{block name=content}

<form method="POST" enctype="multipart/form-data" action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/edit/s/{$subsiteId}/create-f">    
    
    <div>
        {include file="fragment_components/createContentFragment.tpl"}
    </div>
    <div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentCredentials">
            <h1 class="text-2xl font-bold mb-2">
                Credentials
            </h1>
            {include file='editFragments/credentials.tpl'}
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentIframe">
            <h1 class="text-2xl font-bold mb-2">
                Iframe
            </h1>
            {include file='editFragments/iframe.tpl'}
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentImage">
            <h1 class="text-2xl font-bold mb-2">
                Image
            </h1>
            {include file='editFragments/image.tpl'}
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentLink">
            <h1 class="text-2xl font-bold mb-2">
                Link
            </h1>
            {include file='editFragments/link.tpl'}
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentNews">
            <h1 class="text-2xl font-bold mb-2">
                News
            </h1>
            {include file='editFragments/news.tpl'}
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentProjectinfo">
            <h1 class="text-2xl font-bold mb-2">
                Project Info
            </h1>
            {include file='editFragments/projectinfo.tpl'}
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentSocials">
            <h1 class="text-2xl font-bold mb-2">
                Socials
            </h1>
            {include file='editFragments/socials.tpl'}
        </div>
        <div class="fragment-type m-4 border-l-2 border-primary p-2 pl-4" id="FragmentText">
            <h1 class="text-2xl font-bold mb-2">
                Text
            </h1>
            {include file='editFragments/text.tpl'}
        </div>
    
    </div>
    {include file="components/submitbutton.tpl" text="Create" type="primary"}
</form>

{/block}
