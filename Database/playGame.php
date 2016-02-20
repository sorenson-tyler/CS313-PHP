<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: http://php-tsorenson.rhcloud.com/Database/actions.html");
        exit;
    }
    require 'connectDB.php';
    
    $button_clicked = $_POST['nextButton'];
    $points[] = $_POST['points[]'];
    $users = $db->query("SELECT * FROM user");
    $username[] = null;
    $i = 0;
    foreach ($users as $user)
    {
        $username[$i++] = $user['name'];
    }
    
    if ($button_clicked == "Next Round")
    {
        $i = 0;
        foreach ($_POST['points'] as $points)
        {
            //Current Points and Total Points Query
            $stmt = $db->prepare('UPDATE user SET score_total = score_total + current_score, current_score = current_score + :points WHERE name = :name');
            $stmt->execute(array(':points' => $points, ':name' => $username[$i]));
            $i++;
        }
        //Redirect back to the game
        header("Location: http://php-tsorenson.rhcloud.com/Database/gameForm.php");
        exit;
    }
    else if ($button_clicked == "End Game")
    {
        foreach ($username as $user)
        {
            //End Game Query
            $stmt = $db->prepare('UPDATE user SET score_total = score_total + current_score, current_score = 0, games_played = games_played + 1 WHERE name = :username');
            $stmt->execute(array(':username' => $user));
        }
        //Redirect back to the actions page
        header("Location: http://php-tsorenson.rhcloud.com/Database/actions.php");
        exit;
    }
?>