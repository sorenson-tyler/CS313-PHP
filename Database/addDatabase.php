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