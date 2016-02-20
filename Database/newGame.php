<!DOCTYPE html>
<html>
    <head>
        <title>New Game</title>
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
        <a id="results_button" href="actions.php">Click to return to actions</a>
        <h1 id="title">Start a new game</h1>
        <form method="post" action="newGamePlayers.php" id="searchForm">
            <select name="game_type">
                <?php 
                    require 'connectDB.php';
                    $stmt = $db->prepare('SELECT name FROM game_type');
                    $stmt->execute();
                    $rows = $stmt->fetchAll();
                    $length = count($rows);
                    if ($length == 0)
                        echo "Error: No game types found!";
                    foreach($rows as &$game): ?>
                <option value="<?= $game['name'] ?>"><?= $game['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" name="submit" value="Next">
        </form>
    </body>
</html>