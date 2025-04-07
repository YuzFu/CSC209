<!DOCTYPE html>
<html>
    <head>
        <title>Level 5</title>
        
        <style>
            html {
                padding: 10px;
            }

            body {
                width: 50%;
            }

            .slideshow-container {
                position: relative;
                margin: auto;
            }

            .nav-buttons {
                text-align: center;
                margin-top: 10px;
            }

            .mySlides {
                display: none;
            }

            .mySlides img {
                width: 100%;
                height: auto;
                display: block; 
            }

            .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                margin-top: -22px;
                padding: 10px;
                color: #F2F2F2;
                transition: 0.8s ease;
                user-select: none;
            }

            .next {
                right: 0;
            }

            .prev:hover, .next:hover {
                background-color: rgba(27,48,59,0.8);
            }

            .slideshow-text {
                text-align:center; 
                padding:10px;
            }

            .text {
                color: #1B3059;
                position: absolute;
                width: 100%;
                text-align: center;
                bottom: -70px;
                font-size: 20px;
            }

            .numbertext {
                color: #F2F2F2;
                padding: 10px;
                position: absolute;
            }

            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 10px;
                background-color: rgba(38, 35, 36, 0.4);
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.8s ease;
            }

            .active, .dot:hover {
                background-color: #262324;
            }

            .fade {
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @keyframes fade {
                from {opacity: .4}
                to {opacity: 1}
            }
        </style>
    </head>

    <body>
        <?php
            $images = glob("images/*.jpg");
            $total = count($images);

            $index = isset($_GET['slide']) ? intval($_GET['slide']) : 0;
            if ($index < 0) $index = 0;
            if ($index >= $total) $index = $total - 1;
            
            $currentImage = $images[$index];

            $prev = ($index - 1 + $total) % $total;
            $next = ($index + 1) % $total;
        ?>
        
        <div class="slideshow-container">
            <div class="mySlides fade" style="display: block;">
                <img src="<?php echo $currentImage; ?>">
            </div>

            <a class="prev" href="?slide=<?php echo $prev; ?>">&#10094;</a>
            <a class="next" href="?slide=<?php echo $next; ?>">&#10095;</a>
        </div>

        <div class="slideshow-text">
            <?php
            for ($i = 0; $i < $total; $i++) {
                $active = ($i == $index) ? 'active' : '';
                echo "<a href='?slide=$i'><span class='dot $active'></span></a>";
            }
            ?>
        </div>

    </body>
</html>