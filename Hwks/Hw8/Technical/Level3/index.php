<!DOCTYPE html>
<html>
    <head>
        <title>
            Level 3
        </title>

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <label for="imageSelect">Choose an image: </label>
        <select id="imageSelect">
            <option value="all">Show All</option>
            <?php
            $image_arr = glob("images/*");
            foreach ($image_arr as $index => $image) {
                $select = substr(basename($image), 0, strpos(basename($image), "."));
                echo "<option value='img$index'>" . $select . "</option>";
            }
            ?>
        </select>

        <div id="imageContainer">
            <?php
            foreach ($image_arr as $index => $image) {
                echo "<img src='$image' id='img$index'>";
            }
            ?>
        </div>

        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>