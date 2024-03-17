<footer id="footer" class="pt-6 mt-32">

    <div id="logo-wrapper" class="md:flex md:items-center justify-between mb-2" style="min-width: min(100vw, 1200px);">
        <div style="margin-left: 4vw">
            <a href="/">
                <img src="{BusinessConstants::$STATIC_URL_PREFIX}/assets/logo.png" alt="PROJECT_NAME" class="w-12">
            </a>
        </div>
        <ul id="footer-info" class="md:flex justify-center flex-wrap mt-6 md:mt-0 mx-4 md:mx-0">
            <li class="p-1.5 my-2 md:my-1 m-1">
                {include file="components/textlink.tpl" text="Start Page" route="/" class="jbmono underline text-gray-400"}
            </li>
            <li class="p-1.5 my-2 md:my-1 m-1">
                {include file="components/textlink.tpl" text="My Account" route="/a" class="jbmono underline text-gray-400"}
            </li>
        </ul>
    </div>
    <div id="footer-bottom-info" class="mt-6">
        <p class="text-center text-gray-600">
            Copyright Mosaic
        </p>
    </div>            
</footer>