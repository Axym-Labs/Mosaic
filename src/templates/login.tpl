{extends file='base/base.tpl'}
{block name=content}

<div class="flex justify-center">
    <div class="w-full md:w-xl md:h-96 flex justify-center">
        <div class="">
            {include file="components/header.tpl" text="Login"}
            <form action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/login" method="POST" enctype="multipart/form-data">
                <table>
                    <table>
                        <tr class="">
                            <td class="p-3">
                                {include file="components/input/label.tpl" for="Email" required=true}
                            </td>
                            <td class="p-3">
                                {include file="components/input/input.tpl" type="email" id="Email" class="text-lg text-white" required=true}
                            </td>
                        </tr>
                        <tr class="">
                            <td class="p-3">
                                {include file="components/input/label.tpl" for="Password" required=true}
                            </td>
                            <td class="p-3">
                                {include file="components/input/input.tpl" type="password" id="Password" class="text-lg text-white" required=true}
                            </td>
                        </tr>
                </table>
                <div class="flex justify-end">
                    {include file="components/submitbutton.tpl" text="Login" type="primary" class="w-full"}
                </div>
            </form>
        </div>
    </div>
</div>

{/block}
