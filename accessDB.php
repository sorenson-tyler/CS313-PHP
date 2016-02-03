<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form id = "gameSearch" method="post" action="accessDB.php">
            Search for game:
            <input name = "searchBox" type=text width="20px">
            <button id="searchButton" type="submit" name="Search">Search</button>
        </form>
        
        <?php
              try
            {
               $user = 'php';
               $password = 'dstasl66'; 
               $db = new PDO('mysql:host=127.6.94.2;dbname=php', $user, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully"; 
            }
            catch (PDOException $ex) 
            {
               echo 'Error!: ' . $ex->getMessage();
               die(); 
            }
        
            $search = $_POST["searchBox"];
            echo $search;
        
            $stmt = $db->prepare('SELECT * FROM table game_type where name = :name');
            $stmt->execute(array(':name' => $search));
            echo $stmt->fetch();
        ?>
    </body>