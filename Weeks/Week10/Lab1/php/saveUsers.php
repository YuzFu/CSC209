<!DOCTYPE html>
<html>
    <head>
        <title>
            Welcome
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
        $file = file_exists($filepath) ? fopen("../output/users.txt","a") : fopen("../output/users.txt","w");
        fwrite($file, 'Username:' . $_POST["username"] . "\n");
        fwrite($file, 'Password:' . $_POST["password"] . "\n\n");
        fclose($file);
        ?>
    </body>
</html>