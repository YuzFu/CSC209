<!-- https://www.w3schools.com/howto/howto_css_responsive_header.asp -->
<!-- https://www.w3schools.com/howto/howto_css_image_text_blocks.asp -->
<!-- https://stackoverflow.com/a/14235500 -->
<!DOCTYPE html>
<html>
    <head>
        <title>
            Home
        </title>    

        <link id="stylesheet" rel="stylesheet" href="../css/default.css">
        <link id="stylesheet" rel="stylesheet" href="../css/home.css">
    </head>

    <body>
        <div class="header">
            <div class="header-left">
                <img src="../images/graphic.png" style="width: 50px;">
                <a href="https://www.smith.edu/your-campus/residence-life" class="logo">Smith Residence Life Web App</a>
            </div>
            <div class="header-right">
                <a class="active" href="1_home.php">Home</a>
                <a href="2_houses.php">Houses</a>
                <a href="3_forum.php">Forum</a>
                <a href="4_post.php">Post</a>
                <a href="5_admin.php">Admin</a>
            </div>
        </div>

        <div class="main">
            <h1>Responsive Header</h1>
            <p>Resize the browser window to see the effect.</p>
            <p>Some content..</p>

            <div id="map_canvas" style="width: 100%; height: 400px;"></div>
        </div>
        
        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3NWcM7sfWksByblxqR4HLYuLH-2FMHU4&loading=async&callback=initMap">
        </script>
        <script>
            var directionsDisplay,
            directionsService,
            map;

            function initMap() {
            var directionsService = new google.maps.DirectionsService();
            directionsDisplay = new google.maps.DirectionsRenderer();
            var chicago = new google.maps.LatLng(42.3192343,-72.6396934);
            var mapOptions = { zoom:7, mapTypeId: google.maps.MapTypeId.ROADMAP, center: chicago }
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            directionsDisplay.setMap(map);
            }
        </script>
        <!-- <script type="text/javascript" src="../js/map.js"></script> -->
    </body>
</html> 
