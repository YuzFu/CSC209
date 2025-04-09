<!DOCTYPE html>
<html>
    <head>
        <title>
            Level 2
        </title>

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php
        $image_arr = glob("images/*");
        foreach ($image_arr as $image) {
            echo "<img src='$image' style='width:100%''>";
        }

        ?>
    </body>
</html>