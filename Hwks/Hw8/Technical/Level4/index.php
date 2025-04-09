<!DOCTYPE html>
<html>
    <head>
        <title>Level 4</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="slideshow-container">
            <div id="slides"></div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div style="text-align:center; padding:10px" id="dots"></div>

        <?php
        $image_files = glob("images/*");
        $slide_data = [];

        foreach ($image_files as $file) {
            $filename = basename($file);
            $caption = substr($filename, 0, strpos($filename, "."));
            $slide_data[] = [
                "src" => $file,
                "caption" => $caption
            ];
        }
        ?>

        <script>var slidesData = JSON.parse('<?= json_encode($slide_data); ?>');</script>
        <script src="js/slideshow.js"></script>
    </body>
</html>

