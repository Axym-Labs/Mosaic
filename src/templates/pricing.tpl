{extends file='base/base.tpl'}
{block name=content}

{include "larger_components/planOverview.tpl" plans=$plans planperms=$planperms planColumnTypeData=$planColumnTypeData planpermColumnTypeData=$planpermColumnTypeData}

{/block}