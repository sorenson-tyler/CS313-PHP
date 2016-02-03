<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            try
            {
               $user = 'php'
               $password = 'php-pass'; 
               $db = new PDO('mysql:host=127.0.0.1;dbname=myTestDB', $user, $password);
            }
                catch (PDOException $ex) 
                {
                   echo 'Error!: ' . $ex->getMessage();
                   die(); 
                }
        ?>
    </body>