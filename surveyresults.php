<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <h3>Thank you for your response 
        <?php
            $_SESSION["firstname"] = $_POST["first_name"];
            $_SESSION["lastname"] = $_POST["last_name"];
            echo $_SESSION["firstname"];
        ?>
        </h3>
    </body>
</html>