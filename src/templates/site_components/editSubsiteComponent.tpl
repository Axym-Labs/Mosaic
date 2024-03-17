{if !isset($subsiteSubmitText)}
    {assign var="subsiteSubmitText" value="Create subsite"}
{/if}
{if !isset($subsiteIsUpdate)}
    {assign var="subsiteIsUpdate" value=false}
{/if}
{if !isset($subsite)}
    {assign var="subsite" value=null}
{/if}

<div class="border-l-2 border-primary rounded-r-xl m-4 md:m-6 bg-highlightedbg p-4">
    <form method="POST" enctype="multipart/form-data" action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}{if !$subsiteIsUpdate}/create/subsite{else}/edit/s/{$existingSubsiteId}{/if}">
        <div class="">
            <table>
                <tr class="">
                    <td class="p-3">
                        {include file="components/input/label.tpl" for="Name" required=true}
                    </td>
                    <td class="p-3">
                        {include file="components/input/input.tpl" id="Name" placeholder="My project" required=true value=GenericRender::InsertValueAttribute($subsite, 'Name')}
                    </td>
                </tr>
                <tr class="">
                    <td class="p-3">
                        {include file="components/input/label.tpl" for="Route" required=true}
                    </td>
                    <td class="p-3">
                        <div class="flex items-center">
                            <p class="text-gray-500 text-xl ml-2">{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/u/{$owner["Username"]}/</p>
                            {include file="components/input/input.tpl" id="Route" class="text-lg text-white md:mr-6" placeholder="my-project" maxlength="50" required=true value=GenericRender::InsertValueAttribute($subsite, 'Route')}
                            {if !$planperm['ShortLinkOption']}
                                {include file="components/callout.tpl" text="Shorter is better"}
                            {/if}
                        </div>
                    </td>
                </tr>
                <tr class=" {if $planperm['ShortLinkOption']}opacity-50{/if}">
                    <td class="p-3">
                        {include file="components/input/label.tpl" for="ShortRoute" text="Short Route"}
                    </td>
                    <td class="p-3">
                        <div class="flex items-center justify-start">
                            <div class="flex items-center justify-start {if !$planperm['ShortLinkOption']}opacity-50{/if}">
                                <p class="text-gray-500 text-xl ml-2">{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/s/</p>
                                {if !$planperm['ShortLinkOption']}
                                    {assign var="shortRouteInputDisabled" value="disabled"}
                                {else}
                                    {assign var="shortRouteInputDisabled" value=""}
                                {/if}
                                {include file="components/input/input.tpl" id="ShortRoute" class="text-lg text-white md:mr-6" maxlength="50" otherAttributes=$shortRouteInputDisabled placeholder="my-project" required=true value=GenericRender::InsertValueAttribute($subsite, 'ShortRoute')}
                            </div>
                            {if !$planperm['ShortLinkOption']}
                                {include file="components/callout.tpl" text="Upgrade your plan to enable short routes." fixed=true}
                            {/if}
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        {include file="components/submitbutton.tpl" text=$subsiteSubmitText type="primary"}
    </form>
</div>