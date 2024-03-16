{if !isset($isVisitingAccountPage)}
    {assign var="isVisitingAccountPage" value=false}
{/if}


<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" maxlength="50" required><br>

        <label for="LastName">Last Name:</label>
        <input type="text" id="LastName" name="LastName" maxlength="50" required><br>

        <label for="FirstName">First Name:</label>
        <input type="text" id="FirstName" name="FirstName" maxlength="50" required><br>

        <label for="ProfilePicture">Profile Picture (JPG String):</label>
        <input type="text" id="ProfilePicture" name="ProfilePicture" maxlength="255" required><br>

        <label for="Username">Username:</label>
        <input type="text" id="Username" name="Username" maxlength="50" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
</div>
