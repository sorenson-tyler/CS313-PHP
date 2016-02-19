<?php
    session_start();
    if(isset($_SESSION["user"]))
    {
        header("Location: http://php-tsorenson.rhcloud.com/Database/actions.html");
        exit;
    }
    require 'connectDB.php';
    
    $username = $_POST['name'];
    $password = $_POST['password'];
    
    if ($username != null)
    {
        $stmt = $db->prepare('SELECT password FROM user WHERE name=:name');
        $stmt->execute(array(':name' => $username));
        $rows = $stmt->fetchAll();
        if($rows == null)
            echo "ERROR: No user by that name in the database!";
        else if ($rows[0]['password'] != $password)
            echo "ERROR: Invalid password!";
        else if ($rows[0]['password'] == $password)
        {
            $_SESSION["user"] = $username;
            echo "Welcome $username";
            header("Location: http://php-tsorenson.rhcloud.com/Database/actions.html");
            exit;
        }
    }
    else
        echo "ERROR: Please fill in all items and try again";
?>