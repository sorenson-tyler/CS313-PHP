<?php
    session_start();
    $_SESSION["firstname"] = $_POST["first_name"];
    $_SESSION["lastname"] = $_POST["last_name"];
    $file = fopen("resultsType.txt", "a") or die("can't open file");
    $type = $_POST["car_type"];
    fwrite($file, $type);
    fwrite($file, "\n");
    fclose($file);
    
    $file = fopen("resultsModel.txt", "a") or die ("can't open file");
    $model = $_POST["car_model"];
    fwrite($file, $model);
    fwrite($file, "\n");
    fclose($file);

    $file = fopen("resultsColor.txt", "a") or die ("can't open file");
    $color = $_POST["car_color"];
    fwrite($file, $color);
    fwrite($file, "\n");
    fclose($file);
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