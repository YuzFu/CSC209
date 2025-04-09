<!DOCTYPE html>
<html>
    <head>
        <title>Level 7</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <label for="themeSelect">Choose a theme: </label>
        <select id="themeSelect">
            <?php
            function test_dir($var) {
                return($var !== '.' && $var !== '..' && is_dir("images/$var"));
            }

            $selected_js = $_COOKIE['selected'] ?? 'Flowers';
            $theme_arr = array_filter(scandir('images/'),"test_dir");

            foreach ($theme_arr as $theme) {
                $selected = ($theme === $selected_js) ? "selected" : "";
                echo "<option value='$theme' $selected>$theme</option>";
            }
            ?>
        </select>

        <div class="slideshow-container">
            <?php
            $theme = $_COOKIE['selected'] ?? 'Flowers';
            $image_files = glob("images/$theme/*");
            $n = count($image_files);

            foreach ($image_files as $index => $file) {
                $filename = basename($file);
                $i = $index+1;
                $caption = substr($filename, 0, strpos($filename, "."));;
                echo "<div class='mySlides fade'>
                        <div class='numbertext'>$i / $n</div>
                        <img src='$file'>
                        <div class='text'>$caption</div>
                        </div>";
            };
            ?>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div style="text-align:center; padding:10px">
            <?php
            for ($i = 1; $i <= $n; $i++) {
                echo "<span class='dot' onclick='currentSlide($i)'></span>";
            }
            ?>
        </div>

        <script src="js/slideshow.js"></script>
    </body>
</html>

