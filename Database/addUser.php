<?php
    $user_name = $_POST['name'];

    if ($user_name != null)
        echo "User added";
    else
        echo "Please fill in all items and try again";
?>