<!DOCTYPE html>
<html>
    <head>
        <title>
            Login
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <?php
        include "myLib.php";

        $filepath = __FILE__;
        extractFolderNumber($filepath);
        ?>

        <form action="saveUsers.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Submit">
        </form>     
    </body>
</html>