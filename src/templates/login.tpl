{extends file='base/base.tpl'}
{block name=content}

<div>
    <form action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/login" method="POST">
        <input type="text" name="Email" id="Email" placeholder="Email">
        <input type="password" name="Password" id="Password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
</div>

{/block}
