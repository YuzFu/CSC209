<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Echo
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <?php
        echo "<h2>The output is the same</h2>";
        echo("<p>regardless of the parentheses</p>");
        ?>

        <h2>Single Quotes</h2>
        <?php
        $txt = '.';
        echo "When using single quotes, the variables has to be inserted using " . $txt . " operator.";
        ?>
    </body>
</html>