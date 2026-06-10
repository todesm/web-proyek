<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellspacing="11" align="center">
        <caption>silahkan login terlebih dahulu</caption>
        <form action="process.php" method="post">
            <tr>
                <td><label for="username">username :</label></td>
                <td><input type="text" placeholder="username" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="pasword">pasword : </label></td>
                <td><input type="pasword" placeholder="pasword" name="pasword" id="pasword"></td>
            </tr>
            <tr>
                <td><button type="submit" name="login">login</button></td>
            </tr>
        </form>
    </table>
</body>
</html>
<?php