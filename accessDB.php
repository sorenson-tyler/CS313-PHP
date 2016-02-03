<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form id = "gameSearch">
            Search for game:
            <input name = "searchBox" type=text width="20px">
            <button id="searchButton"/>
        </form>
        <?php
            try
            {
               $user = 'php'
               $password = 'php-pass'; 
               $db = new PDO('mysql:host=127.0.0.1;dbname=php', $user, $password);
            }
            catch (PDOException $ex) 
            {
               echo 'Error!: ' . $ex->getMessage();
               die(); 
            }
        ?>
    </body>