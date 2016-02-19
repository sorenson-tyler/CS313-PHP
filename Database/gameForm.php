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
    </head>
    <body>
        <h1>Play Game</h1>
        <form action="playGame.php" method="post">
            <table>
                <tr>
                    <td>Player 1</td>
                    <td><input name="name" type="number" placeholder="Score"></td>
                </tr>
            </table>
        </form>
    </body>
</html>