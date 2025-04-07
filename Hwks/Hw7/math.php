<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Math
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <h2>pi</h2>
        <?php
        echo(pi())
        ?>

        <h2>Min and Max</h2>
        <?php
        echo(min(0, 150, 30, 20, 8, -200));
        echo(max(0, 150, 30, 20, 8, -200));
        ?>

        <h2>Absolute Value</h2>
        <?php
        echo(abs(-345.3));
        ?>

        <h2>Square Root</h2>
        <?php
        echo(sqrt(36));
        ?>

        <h2>Round</h2>
        <?php
        echo(round(0.6));
        ?>

        <h2>Random Number Between 10 and 100</h2>
        <?php
        echo(rand(10, 100));
        ?>
    </body>
</html>