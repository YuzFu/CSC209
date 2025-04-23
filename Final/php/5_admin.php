<?php
if (isset($_GET['fetch'])) {
    $data = file_get_contents('../data/users.json');
    $json_data = json_decode($data, true);
    $count = count($json_data);
    echo "<br><strong>Number of users: $count </strong><br>";
    echo "<br><strong>List of users: </strong><br>";

    echo "<ul>";
    foreach ($json_data as $i=>$user) {
        $name = $user['Username'];
        $index = $i+1;
        echo "<li> User $index: $name </li>";
    }
    echo "</ul>";
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin
        </title>

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
                <a href="2_houses.php">Houses</a>
                <a href="3_forum.php">Forum</a>
                <a href="4_post.php">Post</a>
                <a class="active" href="5_admin.php">Admin</a>
            </div>
        </div>

        <button onclick="updateUsers()" style="width:auto;">Update User List</button>
        <div id="userList"></div>

        <script src="../js/admin.js"></script>
    </body>
</html>