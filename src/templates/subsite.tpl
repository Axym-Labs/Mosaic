{extends file='base/base.tpl'}
{block name=content}


<br>
<br>

{include file='site_components/subsiteView.tpl'}

<br>
<br>

<h1>Data</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" maxlength="50"><br>

        <label for="Route">Route:</label>
        <input type="text" id="Route" name="Route" maxlength="50"><br>

        <label for="ShortRoute">Short Route:</label>
        <input type="text" id="ShortRoute" name="ShortRoute" maxlength="50"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


{/block}
