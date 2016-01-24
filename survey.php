<?php
    session_start();
    if(isset($_SESSION["color"], $_SESSION["model"], $_SESSION["type"]))
    {
        header("Location: http://php-tsorenson.rhcloud.com/surveyresults.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Student Survey</title>
        <link rel="stylesheet" type="text/css" href="survey.css"/>
        <link rel="stylesheet" type="text/css" href="homepage.css"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="header">
            <h1 id="name">Tyler Sorenson</h1>
            <nav id="navigation">
                <ul>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="https://www.byui.edu">BYU - Idaho</a></li>
                    <li><a href="index.html">About</a></li>
                </ul>
            </nav>
        </div>
        <div class="title">
            <h1 id="title">Student Survey</h1>
        </div>
        <button id="results_button" href="http://php-tsorenson/surveyresults.php">Click to see Results</button>
        <form action="surveyresults.php" method="post">
            <div id="firstname">
                First name: 
                <input type="text" name="first_name">
            </div>
            <div id="lastname">
                Last name: 
                <input type="text" name="last_name">
                <br><br>
            </div>
            <div id="model">
                What model car do you drive?<br>
                <input type="radio" name="car_model" value="Honda">Honda<br>
                <input type="radio" name="car_model" value="Toyota">Toyota<br>
                <input type="radio" name="car_model" value="Nissan">Nissan<br>
                <input type="radio" name="car_model" value="Ford">Ford<br>
                <input type="radio" name="car_model" value="Jeep">Jeep<br>
                <input type="radio" name="car_model" value="Buick">Buick<br>
                <input type="radio" name="car_model" value="Chevrolet">Chevrolet<br>
                <input type="radio" name="car_model" value="Other">Other<br>
                <input type="radio" name="car_model" value="None">None<br><br>
            </div>
            <div id="type">
                What type of car do you drive?<br>
                <input type="radio" name="car_type" value="Sedan">Sedan<br>
                <input type="radio" name="car_type" value="Minivan">Minivan<br>
                <input type="radio" name="car_type" value="Truck">Truck<br>
                <input type="radio" name="car_type" value="SUV">SUV<br>
                <input type="radio" name="car_type" value="Sports car">Sports car<br><br>
            </div>
            <div id="color">
                What color car do you drive?<br>
                <input type="radio" name="car_color" value="Red">Red<br>
                <input type="radio" name="car_color" value="Blue">Blue<br>
                <input type="radio" name="car_color" value="Green">Green<br>
                <input type="radio" name="car_color" value="Black">Black<br>
                <input type="radio" name="car_color" value="White">White<br>
                <input type="radio" name="car_color" value="Grey">Grey<br>
                <input type="radio" name="car_color" value="Other">Other<br>
            </div>
            <input type="submit">
        </form>
    </body>
</html>
