{extends file='base/base.tpl'}
{block name=content}

<div>
    <form action="{BusinessConstants::$UNIVERSAL_ROUTE_PREFIX}/create/user">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="profilepicture">Profile Picture:</label>
        <input type="file" id="profilepicture" name="profilepicture" accept="image/*"><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <input type="submit" value="Submit">
    </form>
</div>

{/block}
