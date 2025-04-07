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
    <h2>This page figures out its whereabouts</h2>

    <?php
    $filepath = realpath(dirname(__FILE__));
    $basename = basename(__DIR__);
    $weekNrString = substr($basename, -1);
    $weekNr = (int)$weekNrString;
    echo "The path to the current folder is $filepath <br>";
    echo "The basename is $basename. <br>";
    echo "My week number is $weekNrString. <br>";
    ?>

    </body>
</html>