<!DOCTYPE html>

<?php
    require 'connectDB.php';

    $name = "Monopoly";
    $stmt = $db->prepare('SELECT * FROM game_type WHERE name=:name');
    $stmt->execute(array(':name' => $name));
    $rows = $stmt->fetchAll();
    echo 'Name: ' . $rows[0]['name'] . 'Min players: ' . $rows[0]['number_players_min'] . 'Max players: ' . $rows[0]['number_players_max'] . 'Highest score wins: ' . $rows[0]['positive_scoring']; 
?>