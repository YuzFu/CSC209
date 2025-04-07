<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Include
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <h2>CSC 209 Course Website</h2>
        <?php 
        include 'external/link.php';
        ?>

        <?php include 'external/info.php';
        echo "Class time: $time <br>";
        echo "Meeting Location: $location <br>";
        ?>
    </body>
</html>