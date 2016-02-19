<?php
    session_start();
    if(isset($_SESSION["user"]))
    {
        header("Location: http://php-tsorenson.rhcloud.com/Database/actions.html");
        exit;
    }
    require 'connectDB.php';
    
    $username = $_POST['name']; 
    
    //Current Points and Total Points Querey
    $stmt = $db->prepare('UPDATE user SET score_total = current_score, current_score = :points WHERE name = :username');
    $stmt->execute(array(':points' => $points, ':name' => $username));
    
    //End Game Querey
    $stmt = $db->prepare('UPDATE user SET score_total = current_score, current_score = 0, games_played = games_played + 1 WHERE name = :username');
    $stmt->execute(array(':username' => $username));
    
?>