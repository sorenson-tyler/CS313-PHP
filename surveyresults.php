<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // Set session variables
            $_SESSION["firstname"] = $_POST["first_name"];
            $_SESSION["lastname"] = $_POST["last_name"];
        ?>
        <h1>Your name is 
            <?php echo $_SESSION['firstname'];?>
        </h1>
    </body>
</html>