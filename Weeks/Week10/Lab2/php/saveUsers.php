<!DOCTYPE html>
<html>
    <head>
        <title>
            Save Users
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        Your username is: <?php echo $_POST["username"]; ?><br>
        Your password is: <?php echo $_POST["password"]; ?>

        <?php
        $filepath = "../output/users.txt";
        $info = array("Username" => $_POST["username"], "Password" => $_POST["password"]);

        if (file_exists($filepath)) {
            $content = file_get_contents($filepath);
            $arr = json_decode($content, true);
        } else {
            $arr = [];
        }

        $arr[] = $info;
        file_put_contents($filepath, json_encode($arr));
        ?>

    </body>
</html>