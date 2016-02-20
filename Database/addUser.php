<!DOCTYPE html>
<html>
    <head>
        <title>Modify Database</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://php-tsorenson.rhcloud.com/homepage.css"/>
        <link rel="stylesheet" type="text/css" href="db.css"/>
    </head>
    <body>
        <div id="header">
            <h1 id="name">Tyler Sorenson</h1>
            <nav id="navigation">
                <ul>
                    <li><a href="http://php-tsorenson.rhcloud.com/projects.html">Projects</a></li>
                    <li><a href="https://www.byui.edu">BYU - Idaho</a></li>
                    <li><a href="http://php-tsorenson.rhcloud.com/index.html">About</a></li>
                </ul>
            </nav>
        </div>
        <a id="results_button" href="actions.php">Click to return to actions</a>
        <h1 id="title">Results</h1>
        <?php
            require 'connectDB.php';
            $user_name = $_POST['name'];
            $password = $_POST['password'];

            if ($user_name != null)
            {
                $stmt = $db->prepare('SELECT name FROM user WHERE name=:name)');
                $stmt->execute(array(':name' => $user_name));
                $rows = $stmt->fetchAll();
                if ($rows == null)
                {
                    $stmt = $db->prepare('INSERT INTO user (name, password) VALUES (:name, :password)');
                    $stmt->execute(array(':name' => $user_name, ':password' => $password));
                    echo "User added";
                }
                else
                    echo "ERROR: User already exists! Please log in";
            }
            else
                echo "Please fill in all items and try again";
        ?>
    </body>
</html>