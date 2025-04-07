<!DOCTYPE html>
<html>
    <head>
        <title>
            Lab Part 1
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>

    <?php
    include "php/myLib.php";

    $filepath = __FILE__;
    extractFolderNumber($filepath);
    ?>

    </body>
</html>