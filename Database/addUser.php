<?php
    require 'connectDB.php';
    $user_name = $_POST['name'];
    $password = $_POST['password'];

    if ($user_name != null)
    {
        $stmt = $db->prepare('INSERT INTO user (name, password) VALUES (:name, :password)');
        $stmt->execute(array(':name' => $user_name, ':password' => $password));
        echo "User added";
    }
    else
        echo "Please fill in all items and try again";
?>