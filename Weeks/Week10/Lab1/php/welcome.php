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
        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <?php echo $_POST["email"]; ?>
    </body>
</html>