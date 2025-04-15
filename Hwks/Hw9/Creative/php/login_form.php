<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Form
        </title>

        <link id="stylesheet" rel="stylesheet" href="../css/style.css">
    </head>

    <body>

        <h2>Login App</h2>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        <button onclick="location.href='admin.php';" style="width:auto;">Administrator</button>

        <div id="id01" class="modal">
        
        <form class="modal-content animate" action="action_page.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="../images/my-notion-face-transparent.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
            <label for="username"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" id="username" name="username"required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="password" name="password" required>
                
            <button type="submit">Submit</button>
            </div>

        </form>
        </div>

        <script src="../js/script.js"></script>
    </body>
</html>