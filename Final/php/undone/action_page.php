<!DOCTYPE html>
<html>
    <head>
        <title>
            Saved Users
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        
        <?php
        $filepath = "../output/users.json";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $info = array("Username" => $_POST["username"], "Password" => $_POST["password"]);

            if (file_exists($filepath)) {
                $content = file_get_contents($filepath);
                $arr = json_decode($content, true);
            } else {
                $arr = [];
            }

            $arr[] = $info;
            file_put_contents($filepath, json_encode($arr));

            echo '<p>Successfully Saved!</p>';
            echo '<p>Your username is: ' . $username . '.</p>';
            echo '<p>Your password is: ' . $password . '.</p>';
    
        }
        ?>

    </body>
</html>