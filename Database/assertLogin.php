<?php
    session_start();
    if(isset($_SESSION["user"]))
    {
        header("Location: http://php-tsorenson.rhcloud.com/Database/actions.html");
        exit;
    }
?>