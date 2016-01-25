<?php
    session_start();
    if(!isset($_SESSION["firstname"], $_SESSION["lastname"], $_SESSION["type"], $_SESSION["color"],$_SESSION["model"]))
    {
        $_SESSION["firstname"] = $_POST["first_name"];
        $_SESSION["lastname"] = $_POST["last_name"];
        $_SESSION["type"] = $_POST["car_type"];
        $_SESSION["color"] = $_POST["car_color"];
        $_SESSION["model"] = $_POST["car_model"];

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
    }
    else
    {
        $color = $_SESSION["color"];
        $model = $_SESSION["model"];
        $type = $_SESSION["type"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="survey.css"/>
        <link rel="stylesheet" type="text/css" href="homepage.css"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="survey.js"></script>
    </head>
    <body onload="loadResults('resultsColor.txt', 'black', 'Black');
                  loadResults('resultsColor.txt', 'white', 'White');
                  loadResults('resultsColor.txt', 'green', 'Green');
                  loadResults('resultsColor.txt', 'blue', 'Blue');
                  loadResults('resultsColor.txt', 'grey', 'Grey');
                  loadResults('resultsColor.txt', 'other', 'Other');
                  loadResults('resultsColor.txt', 'red', 'Red');
                  loadResults('resultsType.txt', 'truck', 'Truck');
                  loadResults('resultsType.txt', 'suv', 'SUV');
                  loadResults('resultsType.txt', 'minivan', 'Minivan');
                  loadResults('resultsType.txt', 'sportscar', 'Sports car');
                  loadResults('resultsType.txt', 'sedan', 'Sedan');
                  loadResults('resultsModel.txt', 'honda', 'Honda');
                  loadResults('resultsModel.txt', 'toyota', 'Toyota');
                  loadResults('resultsModel.txt', 'nissan', 'Nissan');
                  loadResults('resultsModel.txt', 'ford', 'Ford');
                  loadResults('resultsModel.txt', 'jeep', 'Jeep');
                  loadResults('resultsModel.txt', 'buick', 'Buick');
                  loadResults('resultsModel.txt', 'chevrolet', 'Chevrolet');
                  loadResults('resultsModel.txt', 'other', 'Other');
                  loadResults('resultsModel.txt', 'none', 'None');">
        
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
        <div id="tables">
            <table id="resultstablecolor">
                <tr>
                    <th>Car color</th>
                    <th>Votes</th>
                </tr>
                <tr class="">
                    <td>Black</td>
                    <td class="" id="black">0</td>
                </tr>
                <tr class="">
                    <td>White</td>
                    <td class="" id="white">0</td>
                </tr>
                <tr class="">
                    <td>Grey</td>
                    <td class="" id="grey">0</td>
                </tr>
                <tr class="">
                    <td>Red</td>
                    <td class="" id="red">0</td>
                </tr>
                <tr class="">
                    <td>Blue</td>
                    <td class="" id="blue">0</td>
                </tr>
                <tr class="">
                    <td>Green</td>
                    <td class="" id="green">0</td>
                </tr>
                <tr class="">
                    <td>Other</td>
                    <td class="" id="other">0</td>
                </tr>
            </table>
            <table id="resultstabletype">
                <tr>
                    <th>Car type</th>
                    <th>Votes</th>
                </tr>
                <tr class="">
                    <td>Sedan</td>
                    <td class="" id="sedan">0</td>
                </tr>
                <tr class="">
                    <td>Truck</td>
                    <td class="" id="truck">0</td>
                </tr>
                <tr class="">
                    <td>Minivan</td>
                    <td class="" id="minivan">0</td>
                </tr>
                <tr class="">
                    <td>SUV</td>
                    <td class="" id="suv">0</td>
                </tr>
                <tr class="">
                    <td>SportsCar</td>
                    <td class="" id="sportscar">0</td>
                </tr>
            </table>
            <table id="resultstablemodel">
                <tr>
                    <th>Car Model</th>
                    <th>Votes</th>
                </tr>
                <tr class="">
                    <td>Honda</td>
                    <td class="" id="honda">0</td>
                </tr>
                <tr class="">
                    <td>Ford</td>
                    <td class="" id="ford">0</td>
                </tr>
                <tr class="">
                    <td>Buick</td>
                    <td class="" id="buick">0</td>
                </tr>
                <tr class="">
                    <td>Nissan</td>
                    <td class="" id="nissan">0</td>
                </tr>
                <tr class="">
                    <td>Jeep</td>
                    <td class="" id="jeep">0</td>
                </tr>
                <tr class="">
                    <td>Chevrolet</td>
                    <td class="" id="chevrolet">0</td>
                </tr>
                <tr class="">
                    <td>Other</td>
                    <td class="" id="other">0</td>
                <tr class="">
                    <td>None</td>
                    <td class="" id="none">0</td>
                </tr>
                <tr class="">
                    <td>Toyota</td>
                    <td class="" id="toyota">0</td>
                </tr>
            </table>
        </div>
    </body>
</html>