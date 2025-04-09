<!DOCTYPE html>
<html>
    <head>
        <title>
            Level 1
        </title>

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php
        $image_arr = glob("images/*");
        ?>

        <div id="imageContainer"></div>

        <script>var images = JSON.parse('<?= json_encode($image_arr); ?>');</script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>