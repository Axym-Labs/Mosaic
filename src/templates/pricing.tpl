{extends file='base/base.tpl'}
{block name=content}

{include "site_components/planOverview.tpl" plans=$plans planperms=$planperms planColumnTypeData=$planColumnTypeData planpermColumnTypeData=$planpermColumnTypeData}

{/block}