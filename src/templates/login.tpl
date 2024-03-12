{extends file='base/base.tpl'}
{block name=content}

<div>
    <form action="{BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX}/login">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
</div>

{/block}
