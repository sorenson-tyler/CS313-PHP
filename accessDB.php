<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>        
        <?php
            if(isset($_POST["searchBox"]))
            {
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

                $stmt = $db->prepare("SELECT * FROM table game_type where name = '"$search"'");
                $stmt->execute();
                $result = $stmt->fetchAll();
                echo $result;
            }
            else
            {
        ?>
            <form id = "gameSearch" method="post" action="">
                Search for game:
                <input name = "searchBox" type=text width="20px">
                <button id="searchButton" type="submit" name="Search">Search</button>
                <br><br>
            </form>
        <?php
            }
        ?>
    </body>
</html>