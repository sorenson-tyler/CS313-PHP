<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // Set session variables
            $_SESSION["firstname"] = $_POST["firstname"];
            $_SESSION["lastname"] = $_POST["lastname"];
        ?>
        <h1>Your name is 
            <?php echo $_SESSION['firstname'];?>
        </h1>
    </body>
</html>