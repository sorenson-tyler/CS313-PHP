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
               $user = 'php';
               $password = 'dstasl66'; 
               $db = new PDO('mysql:host=127.0.0.1;port=8889;dbname=php', $user, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully"; 
            }
            catch (PDOException $ex) 
            {
               echo 'Error!: ' . $ex->getMessage();
               die(); 
            }
        ?>
    </body>