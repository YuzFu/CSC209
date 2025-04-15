<?php
if (isset($_GET['fetch'])) {
    $data = file_get_contents('../output/users.json');
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
            Web Admin
        </title>

        <link id="stylesheet" rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <h1>Admin</h1>

        <button onclick="updateUsers()" style="width:auto;">Update User List</button>
        <div id="userList"></div>

        <script src="../js/admin.js"></script>
    </body>
</html>