<!DOCTYPE html>
<html>
    <head>
        <title>New Game</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://php-tsorenson.rhcloud.com/homepage.css"/>
        <link rel="stylesheet" type="text/css" href="db.css"/>
        <script type="text/javascript" src="newGamePlayers.js"></script>
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
        <?php 
            require 'connectDB.php';
            $num_players = $_POST['num_players'];
            $player[$num_players]; 
            for ($i = 1;$i <= $num_players; $i++)
            {
                $player[$i] = $_POST['player'+$i];
            }
            foreach ($player as &$name)
                echo $name;
        ?>
    </body>
</html>