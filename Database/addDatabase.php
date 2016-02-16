<!DOCTYPE html>
<html>
    <head>
        <title>Modify Database</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://php-tsorenson.rhcloud.com/homepage.css"/>
        <link rel="stylesheet" type="text/css" href="db.css"/>
    </head>
    <body>
        <div id="header">
            <h1 id="name">Tyler Sorenson</h1>
            <nav id="navigation">
                <ul>
                    <li><a href="http://php-tsorenson.rhcloud.com/projects.html">Projects</a></li>
                    <li><a href="https://www.byui.edu">BYU - Idaho</a></li>
                    <li><a href="http://php-tsorenson.rhcloud.com/index.html">About</a></li>
                </ul>
            </nav>
        </div>
        <a id="results_button" href="actions.html">Click to return to actions</a>
        <h1 id="title">Results</h1>
        <?php
            require 'connectDB.php';

            $game_name = $_POST['name'];
            $game_min_players = $_POST['min_players'];
            $game_max_players = $_POST['max_players'];
            $game_positive_scoring = $_POST['positive_scoring'];

            if ($game_name != null && $game_min_players != null && $game_max_players != null)
            {
                $stmt = $db->prepare('INSERT INTO game_type (number_players_min, number_players_max, positive_scoring, name) VALUES (:min, :max, :score, :name)');
                $stmt->execute(array(':min' => $game_min_players, ':max' => $game_max_players, ':score' => $game_positive_scoring, ':name' => $game_name));
                echo "Game type added";
            }
            else
                echo "Please fill in all items and try again";
        ?>
    </body>
</html>