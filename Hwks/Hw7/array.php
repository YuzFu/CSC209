<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Array
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <h2>Array</h2>
        <?php
        $arr = array("Volve", 15, ["apples", "bananas"]);
        echo "<h3>Length of the array: " .count($arr) . "</h3>";
        echo "<h3>The first item of the array: $arr[0]</h3>";

        $arr[1] = 16;
        echo "<h3>The entire array</h3>";
        var_dump($arr);
        echo "<br>";

        $arr[2] = $arr[2][0];
        echo "<h3>Print out the array one by one</h3>";
        foreach ($arr as $item) {
            echo "$item<br>";
        }
        ?>

        <h2>Associative Array</h2>
        <?php
        echo "<h3>Access array item by key</h3>";
        $associativeArr = array("str"=>"Volve", "number"=>15, "list"=>["apples", "bananas"]);
        echo $associativeArr['str'];
        ?>
    </body>
</html>