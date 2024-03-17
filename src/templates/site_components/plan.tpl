

<tr class="p-1 m-1 md:m-6">
    <td class="p-2 md:p-4">
        <p class="text-white font-bold">
            {$plan["Name"]}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p class="text-gray-200 font-semibold">
            {$planperm["SubSiteLimit"]}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p class="text-gray-200 font-semibold">
            {$planperm["FragmentLimit"]}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            {if ($planperm["ShortLinkOption"])}✅{else}-{/if}
        </p>
    </td>
    <td class="p-2 md:p-4 text-bold text-white">
        <p style="visibility: hidden">
            A
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            {if ($planperm["FragmentBackgroundColorOption"])}✅{else}-{/if}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            {if ($planperm["OpacityOption"])}✅{else}-{/if}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            {if ($planperm["SocialsOrderOption"])}✅{else}-{/if}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            {if ($planperm["TextColorOption"])}✅{else}-{/if}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            {if ($planperm["FontOption"])}✅{else}-{/if}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p>
            {if ($planperm["SubSiteBackgroundImageOption"])}✅{else}-{/if}
        </p>
    </td>
    <td class="p-2 md:p-4">
        <p class="text-white font-bold">
            {$plan["Preis"]}
        </p>
    </td>
</tr>
