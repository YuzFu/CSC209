<!DOCTYPE html>
<html>
    <head>
        <title>Level 4</title>
        <link rel="stylesheet" href="css/slideshow.css">
    </head>

    <body>
        <div class="slideshow-container">
            <?php
                $images = glob("images/*.jpg");
                $count = 0;

                echo '<div id="slides">';
                foreach ($images as $img) {
                    $count++;
                    echo '<div class="mySlides fade">';
                    echo '<img src="' . $img . '" style="width:100%">';
                    echo '</div>';
                }
                echo '</div>';
            ?>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="slideshow-text">
            <?php
                for ($i = 1; $i <= $count; $i++) {
                    echo '<span class="dot" onclick="currentSlide(' . $i . ')"></span>';
                }
            ?>
        </div>

        <script src="js/slideshow.js"></script>
    </body>
</html>

