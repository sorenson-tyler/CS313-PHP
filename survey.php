<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        // Set session variables
        $_SESSION["firstname"] = $_POST["firstname"];
        $_SESSION["lastname"] = $_POST["lastname"];?>
        Your name is <?php echo $_SESSION['firstname'];
    ?>