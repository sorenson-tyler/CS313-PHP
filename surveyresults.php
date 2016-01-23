<?php
    session_start();
    $_SESSION["firstname"] = $_POST["first_name"];
    $_SESSION["lastname"] = $_POST["last_name"];
    include 'results.php';

    $file = "results.txt"
    $fin = fopen($file, 'a');
    $color = $_POST["car_color"];
    $model = $_POST["car_model"];
    $type = $_POST["car_type"];
    fwrite($fin, $type);
    fclose($fin);
?>
<!DOCTYPE html>
<html>
    <head>
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
        <h3>Thank you for your response 
            <?php
                echo $_SESSION["firstname"];
                echo ", you drive a $color $model $type.";
            ?>
        </h3>
        <?php
            include 'carColorGraph.html';
        ?>
    </body>
</html>