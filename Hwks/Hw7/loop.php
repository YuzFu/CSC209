<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Loop
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <h2>While Loop</h2>
        <?php
        $i = 0;
        while ($i < 100) {
            $i+=10;
            echo "$i<br>";
        }
        ?>

        <h2>Do While Loop</h2>
        <p>which will execute the loop once before cheking with the conditions</p>
        <?php
        $i = 100;
        do {
            echo $i;
            $i++;
        } while ($i < 100)
        ?>

        <h2>For Loop</h2>
        <?php
        for ($x = 0; $x <= 100; $x+=10) {
            echo "$x<br>";
        }
        ?>

        <h2>Foreach Loop</h2>
        <?php
        $letters = array("a", "b", "c", "d", "e", "f", "g");
        foreach ($letters as $letter) {
            echo "$letter <br>";
        }
        ?>

        <h3>Foreach Byref</h3>
        <?php
        $numbers = array("0", "1", "2", "3", "4", "5");
        echo "Original array: ";
        foreach ($numbers as &$x) {
            echo "$x";
            $x *= 10;
        }
        echo "<br>Array after change: ";
        var_dump($numbers);
        ?>
    </body>
</html>