<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form id = "gameSearch">
            Search for game:
            <input name = "searchBox" type=text width="20px">
            <button id="searchButton" name="Search"/>
        </form>
        <?php
              try
            {
               $user = 'php'
               $password = 'dstasl66'; 
               $db = new PDO('mysql:host=127.0.0.1;dbname=localhost', $user, $password);
            }
            catch (PDOException $ex) 
            {
               echo 'Error!: ' . $ex->getMessage();
               die(); 
            }
        ?>
    </body>