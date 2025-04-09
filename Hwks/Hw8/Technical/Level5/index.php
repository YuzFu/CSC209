<!DOCTYPE html>
<html>
    <head>
        <title>Level 5</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="slideshow-container">
            <?php
            $image_files = glob("images/*");
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

