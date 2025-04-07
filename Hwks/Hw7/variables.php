<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Variables
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <h2>Two ways to output variables</h2>
        <?php 
        $txt = "world";
        echo "Hello $txt!";
        ?>
        <br>
        <?php 
        $txt = "world";
        echo "Hello " . $txt . "!";
        ?>

        <h2>Get the type</h2>
        <?php
        $txt = "world";
        var_dump($txt);
        ?>

        <h2>Two ways to access a global variable within a function</h2>
        <?php
        $txt = "world";
        function testOne() {
            global $txt;
            $txt = "Hello $txt!";
        }
        testOne();
        echo $txt;
        ?>
        <br>
        <?php
        $txt = "world";
        function testTwo() {
            $GLOBALS['txt'] = "Hello " . $GLOBALS['txt'] . "!";
        }
        testTwo();
        echo $txt;
        ?>
        </body>
</html>