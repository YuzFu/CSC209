<!DOCTYPE html>
<html>
    <head>
        <title>
            Level 1
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <?php
        $image_arr = glob("images/*");
        foreach ($image_arr as $image) {
            echo "<img src='$image', style='width:100%''>";
        }

        ?>
    </body>
</html>