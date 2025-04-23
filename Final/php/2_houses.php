<!-- https://www.w3schools.com/howto/howto_css_flip_card.asp -->
<!-- https://www.w3schools.com/cssref/pr_dim_line-height.php -->
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_filter_list -->
<!DOCTYPE html>
<html>
    <head>
    <title>
        Houses
    </title>

    <link id="stylesheet" rel="stylesheet" href="../css/card.css">
    <link id="stylesheet" rel="stylesheet" href="../css/default.css">
    </head>

    <body>
        <div class="header">
            <div class="header-left">
                <img src="../images/graphic.png" style="width: 50px;">
                <a href="https://www.smith.edu/your-campus/residence-life" class="logo">Smith Residence Life Web App</a>
            </div>
            <div class="header-right">
                <a href="1_home.php">Home</a>
                <a class="active" href="2_houses.php">Houses</a>
                <a href="3_forum.php">Forum</a>
                <a href="4_post.php">Post</a>
                <a href="5_admin.php">Admin</a>
            </div>
        </div>

        <div class="filter">
            <input type="text" id="searchInput" onkeyup="searchCards()" placeholder="Search for house name..." title="Type a house name">
            
        </div>

        <div class="main">
            <div id="card-container"></div>
        </div>

        <script src="../js/card.js"></script>
    </body>
</html> 