<?php
    session_start();
    if(!isset($_SESSION["firstname"], $_SESSION["lastname"], $_SESSION["type"], $_SESSION["color"],$_SESSION["model"]))
    {
        $_SESSION["firstname"] = $_POST["first_name"];
        $_SESSION["lastname"] = $_POST["last_name"];
        $_SESSION["type"] = $_POST["car_type"];
        $_SESSION["color"] = $_POST["car_color"];
        $_SESSION["model"] = $_POST["car_model"];
    }

    $file = fopen("resultsType.txt", "a") or die("can't open file");
    $type = $_SESSION["type"];
    fwrite($file, $type);
    fwrite($file, "\n");
    fclose($file);
    
    $file = fopen("resultsModel.txt", "a") or die ("can't open file");
    $model = $_SESSION["model"];
    fwrite($file, $model);
    fwrite($file, "\n");
    fclose($file);

    $file = fopen("resultsColor.txt", "a") or die ("can't open file");
    $color = $_SESSION["color"];
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
        <script type="text/javascript" src="survey.js"></script>
    </head>
    <body onload="loadResults('resultsColor.txt', 'black', 'Black');">
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
        <h3> 
            <?php
                if (isset($_SESSION["firstname"], $_SESSION["lastname"], $_SESSION["type"], $_SESSION["color"],$_SESSION["model"]))
                {
                    echo "Thank you for your response ";
                    echo $_SESSION["firstname"];
                    echo ", you drive a ";
                    echo "$color $model $type.";
                }
                else
                {
                    echo "Here are the results";
                }
            ?>
        </h3>
        <table id="resultstablecolor">
            <tr>
                <th>Car color</th>
                <th>Student Votes</th>
            </tr>
            <tr class="">
                <td>Black</td>
                <td class="" id="black"></td>
            </tr>
            <tr class="">
                <td>White</td>
                <td class="" id=""></td>
            </tr>
            <tr class="">
                <td>Grey</td>
                <td class="" id=""></td>
            </tr>
            <tr class="">
                <td>Red</td>
                <td class="" id=""></td>
            </tr>
            <tr class="">
                <td>Blue</td>
                <td class="" id=""></td>
            </tr>
            <tr class="">
                <td>White</td>
                <td class="" id=""></td>
            </tr>
            <tr class="">
                <td>Green</td>
                <td class="" id=""></td>
            </tr>
        </table>
    </body>
</html>