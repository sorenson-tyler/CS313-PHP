<?php
    require 'connectDB.php';
    $user_name = $_POST['name'];

    if ($user_name != null)
    {
        $stmt = $db->prepare('INSERT INTO user (name) VALUES (:name)');
        $stmt->execute(array(':name' => $user_name));
        echo "User added";
    }
    else
        echo "Please fill in all items and try again";
?>