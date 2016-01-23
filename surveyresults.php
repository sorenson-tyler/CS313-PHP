<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        Thank you for your response 
        <?php
            $_SESSION["firstname"] = $_POST["first_name"];
            $_SESSION["lastname"] = $_POST["last_name"];
            include 'results.php';
            echo $_SESSION["firstname"];
            echo $value;
        ?>
    </body>
</html>