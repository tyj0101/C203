<?php
include "dbFunction.php";

$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];


$queryInsert = "INSERT INTO user
            (username,password,height,weight)
            VALUES
            ('$username',SHA1('$password'),$height,$weight)";
$resultInsert = mysqli_query($link, $queryInsert) or die(mysqli_error($link));

$message = "<p>Your new account has been successfully created.
            You are now ready to <a href='index.php'>login</a>.</p>";

mysqli_close($link);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <title>doRegister page</title>
        <link rel="stylesheet" type="text/css" href="Solution/style.css">
    </head>
    <body>
        <h3>Sugar Monitoring App - Register</h3>
        <?php echo $message; ?>
    </body>
</html>