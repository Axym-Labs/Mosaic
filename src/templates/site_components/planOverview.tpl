
<div>
    {include file="components/header.tpl" text="Plans"}
    <div class="flex justify-center">
        <table id="pricingtable" class="">
            <tr class="p-1 m-1 md:m-6">
                <td class="p-2 md:p-4">
                    <p>
                        Name
                    </p>
                </td>
                <td class="p-2 md:p-4">
                    <p>
                        Subsite Limit
                    </p>
                </td>
                <td class="p-2 md:p-4">
                    <p>
                        Fragment Limit
                    </p>
                </td>
                <td class="p-2 md:p-4">
                    <p>
                        Short Link
                    </p>
                </td>
                <td class="p-2 md:p-4 text-bold text-white">
                    <p>
                        Customizations
                    </p>
                </td>
                <td class="p-2 md:p-4 border-l-2 border-gray-500 pl-1 ml-5">
                    <p>
                        Background Color
                    </p>
                </td>
                <td class="p-2 md:p-4 border-l-2 border-gray-500 pl-1 ml-5">
                    <p>
                        Opacity
                    </p>
                </td>
                <td class="p-2 md:p-4 border-l-2 border-gray-500 pl-1 ml-5">
                    <p>
                        Socials Order
                    </p>
                </td>
                <td class="p-2 md:p-4 border-l-2 border-gray-500 pl-1 ml-5">
                    <p>
                        Text Color
                    </p>
                </td>
                <td class="p-2 md:p-4 border-l-2 border-gray-500 pl-1 ml-5">
                    <p>
                        Fonts
                    </p>
                </td>
                <td class="p-2 md:p-4 border-l-2 border-gray-500 pl-1 ml-5">
                    <p>
                        Background Image
                    </p>
                </td>
                <td class="p-2 md:p-4">
                    <p>
                        Pricing
                    </p>
                </td>
            </tr>
            {for $i=0 to count($plans)-1}
                {if $plans[$i]["Visible"] == 1}
                    {include file="site_components/plan.tpl" plan=$plans[$i] planperm=$planperm[$i] planColumnTypeData=$planColumnTypeData planpermColumnTypeData=$planpermColumnTypeData}
                {/if}
            {/for}
        </table>
    </div>
</div>