<?php
    try
    {
       $user = 'php';
       $password = 'Qwert123'; 
       $db = new PDO('mysql:host=localhost;dbname=php', $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
    }
    catch (PDOException $ex) 
    {
       echo 'Error!: ' . $ex->getMessage();
       die(); 
    }

    $stmt = $db->prepare("SELECT * FROM table game_type where name = 'Monopoly'");
    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r $result;
?>