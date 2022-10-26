<?php
session_start();
include "dbFunction.php";
$message = "";

$entered_username = $_POST['entered_username'];
$entered_password = $_POST['entered_password'];

$queryCheck = "SELECT * FROM user       
            WHERE username='$entered_username'
            AND password = SHA1('$entered_password')";

$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['userid'] = $row['userid'];
    $_SESSION['username'] = $row['username'];


    header('Location: sugarMonitoring.php');
} else {
    $message = "<p>Sorry, you must enter a valid username and password to log in</p>";
    $message .= "<p><a href='index.php'>Go back to login page</a></p>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>doLogin</title><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div id="menu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <img src="images/glucometer.jpg" alt="Glucometer" width="55" height="50"/>
                <a class="navbar-brand" href="#" style="color:white;padding-left: 15px">Sugar Monitoring App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <form method="post" action="doLogin.php">
                            <label for="username"</label>
                            <input id="username" type="text" name="entered_username" placeholder="Username" required/>
                            <label for="password"</label>
                            <input id="password" type="password" name="entered_password" placeholder="Password" required/>
                            <button class="btn btn-outline-light" type="submit">Login</button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
        <?php echo $message; ?>
    </body>
</html>