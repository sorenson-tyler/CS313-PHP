<?php
    session_start;
    if(isset($_SESSION['name']))
    {
        header("Location: http://php-tsorenson.rhcloud.com/Database/login.php");
        exit;
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Current Game</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://php-tsorenson.rhcloud.com/homepage.css"/>
        <link rel="stylesheet" type="text/css" href="db.css"/>
    </head>
    <body>
        <h1>Play Game</h1>
        <form action="playGame.php" method="post">
            <table>
                <tr>
                    <td>Player 1</td>
                    <td><input name="points" type="number" placeholder="Score"></td><br><br>
                </tr>
            </table>
            <input type="submit" name="nextButton" value="Next Round">
            <input type="submit" name="nextButton" value="End Game">
        </form>
    </body>
</html>