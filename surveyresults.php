<?php
    session_start();
    $_SESSION["firstname"] = $_POST["first_name"];
    $_SESSION["lastname"] = $_POST["last_name"];
?>
<!DOCTYPE html>
<html>
    <body>
        <h3>Thank you for your response 
        <?php
            $color = $_POST["car_color"];
            $model = $_POST["car_model"];
            $type = $_POST["car_type"];
            echo $_SESSION["firstname"];
            echo " you drive a $color $model $type.";
        ?>
        </h3>
    </body>
</html>