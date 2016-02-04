<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form id = "gameSearch" method="post" action="">
            Search for game:
            <input name = "searchBox" type=text width="20px">
            <button id="searchButton" type="submit" name="Search">Search</button>
            <br><br>
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
        
        if(isset($_POST["searchBox"]))
        {
            $search = $_POST["searchBox"];
            echo $search;
        
            $stmt = $db->prepare("SELECT * FROM table game_type where name = '"$search"'");
            $stmt->execute();
            $result = $stmt->fetchAll();
            echo $result;
        }
        else
        {
            echo "Search results";
        }
        ?>
    </body>