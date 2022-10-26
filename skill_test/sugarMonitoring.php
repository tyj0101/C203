<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    die();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sugar Monitoring</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/display.js" type="text/javascript"></script>
        <script>
            $.ajax({
                type: "POST",
                url: "getReading.php",
                cache: false,
                success: function (data) {
                    $('#table tbody').html(data)
                }
            });
        </script>
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
                        <form class="form-inline"  method="post" action="doLogOut.php">
                            <button class="btn btn-outline-light" type="submit">Sign Out</button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-3">
                <h1>Blood Sugar Level Readings</h1>
                <hr>
                <form id="defaultForm" method="post" action="insertReading.php">
                    <div class="form-group">
                        <label for="readingTimes">Reading Taken after:</label>
                        <select id="readingTimes" name="readingTimes" class="form-control">
                            <option value="breakfast" selected="selected">Breakfast</option>
                            <option value="lunch">Lunch</option>
                            <option value="dinner">Dinner</option>
                        </select>
                        <p>Readings are to be taken 2 hours after each meal.</p>
                    </div>
                    <div class="form-group">
                        <label for="readingLvl">Blood Sugar Readings (mmol/L):</label>
                        <input type="text" name="readingLvl" id="readingLvl" class="form-control"  placeholder="0" required/>
                    </div>
                    <input class="btn btn-primary btn-lg btn-block"  type="submit" value="Enter"/>
                </form>
            </div>

            <div class="col-md-9">
                <div class="rightside">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">After Meals Readings</th>
                                <th scope="col">Reading </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
