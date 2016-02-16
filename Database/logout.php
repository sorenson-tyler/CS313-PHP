<?php
    session_start();
    session_unset();
    header("Location: http://php-tsorenson.rhcloud.com/Database/loginPage.php");
    exit;
?>