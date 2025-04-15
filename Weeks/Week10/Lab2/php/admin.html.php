<?php
if (isset($_GET['fetch'])) {
    $data = file_get_contents('../output/users.txt');
    $json_data = json_decode($data, true);
    $count = count($json_data);
    echo "Number of users: $count <br>";
    echo "List of users: <br>";

    foreach ($json_data as $i=>$user) {
        $name = $user['Username'];
        $index = $i+1;
        echo "User $index: $name <br>";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Web Adimin
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>

        <button onclick="updateUsers()">Update User List</button>
        <div id="userList"></div>

        <script src="../js/script.js"></script>
    </body>
</html>