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

            $name = $_POST['name'];
            $stmt = $db->prepare('SELECT * FROM game_type WHERE name=:name');
            $stmt->execute(array(':name' => $name));
            $rows = $stmt->fetchAll();
            if ($rows == null)
            {
                echo 'No game types by that name.';
            }
            else
            {
                echo nl2br ('Name: ' . $rows[0]['name'] . "\nMin players: " . $rows[0]['number_players_min'] . "\nMax players: " . $rows[0]['number_players_max'] . "\nHighest score wins: " . $rows[0]['positive_scoring']);
            }
        ?>
    </body>
</html>