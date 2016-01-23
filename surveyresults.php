<?php
    session_start();
    $_SESSION["firstname"] = $_POST["first_name"];
    $_SESSION["lastname"] = $_POST["last_name"];
    include 'results.php';
?>
<!DOCTYPE html>
<html>
    <body>
        <h3>Thank you for your response 
        <?php
            echo $_SESSION["firstname"];
        ?> 
            you drive a
            <?php
                echo $_POST["car_color"] + " ";
                echo $_POST["car_model"] + " ";
                echo $_POST["car_type"];
            ?>
        </h3>
    </body>
</html>