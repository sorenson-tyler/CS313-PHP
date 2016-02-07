<?php
    $game_name = $_POST['name'];
    $game_min_players = $_POST['min_players'];
    $game_max_players = $_POST['max_players'];
    $game_positive_scoring = $_POST['positive_scoring'];

    if ($game_name != null && $game_min_players != null && $game_max_players != null && $game_positive_scoring != null)
        echo "Game type added";
    else
        echo "Please fill in all items and try again";
?>