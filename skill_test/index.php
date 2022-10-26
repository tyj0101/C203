<!DOCTYPE html>
<!--
Allows user to login or register. You can choose to have a separate registration page.
This page is deliberately left blank.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <label for="username"></label>
                            <input id="username" type="text" name="entered_username" placeholder="Username" required/>
                            <label for="password"></label>
                            <input id="password" type="password" name="entered_password" placeholder="Password" required/>
                            <button class="btn btn-outline-light" type="submit">Login</button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>

        <form method="post" action="doRegister.php">
            <div class="container">
                <fieldset>
                    <legend>Register with US!</legend>
                    <table>
                        <tr>
                            <td><label for="username"></label></td>
                            <td><input class="input" id="username" type="text" name="username" placeholder="Username" required/></td>
                        </tr>
                        <tr>
                            <td><label for="password"></label></td>
                            <td><input class="input" id="password" type="password" name="password" placeholder="Password" required/></td>
                        </tr>
                        <tr>
                        <tr>
                            <td><label for="height"></label></td>
                            <td><input class="input" id="height" type="text" name="height" placeholder="Height in cm" required/></td>
                        </tr>
                        <tr>
                            <td><label for="weight"></label></td>
                            <td><input class="input" id="weight" type="text" name="weight" placeholder="Weight in kg" required/></td>
                        </tr>
                        <td></td>
                        <td><input type="submit" value="Sign up" id="signup"/></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
        </form>
    </body>
</html>
