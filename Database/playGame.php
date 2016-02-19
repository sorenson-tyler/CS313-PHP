<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: http://php-tsorenson.rhcloud.com/Database/actions.html");
        exit;
    }
    require 'connectDB.php';
    
    $button_clicked = $_POST['nextButton'];
    $points = $_POST['points'];
    $username = "Tyler";
    
    if ($button_clicked == "Next Round")
    {
        //Current Points and Total Points Querey
        $stmt = $db->prepare('UPDATE user SET score_total = score_total + current_score, current_score = current_score + :points WHERE name = :name');
        $stmt->execute(array(':points' => $points, ':name' => $username));
        //Redirect back to the game
        header("Location: http://php-tsorenson.rhcloud.com/Database/gameForm.php");
        exit;
    }
    else if ($button_clicked == "End Game")
    {
        //End Game Querey
        $stmt = $db->prepare('UPDATE user SET score_total = score_total + current_score, current_score = 0, games_played = games_played + 1 WHERE name = :username');
        $stmt->execute(array(':username' => $username));
        //Redirect back to the actions page
        header("Location: http://php-tsorenson.rhcloud.com/Database/actions.html");
        exit;
    }
?>