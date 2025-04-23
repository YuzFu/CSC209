<!DOCTYPE html>
<html>
    <head>
        <title>
            Smith Residence Life Web App - Login Form
        </title>

        <link id="stylesheet" rel="stylesheet" href="../css/login.css">
    </head>

    <body>
        <h1>Smith Residence Life Web App</h1>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
        <button onclick="location.href='1_home.php';" style="width:auto;">Log In</button>

        <div id="id01" class="modal">
            <form class="modal-content animate" action="action_page.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="../images/logo.png" class="logo">
                </div>

                <div class="container">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" id="username" name="username"required>
                </div> 

                <div class="container">
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" id="password" name="password" required>
                </div>      
                        
                <button class="modal-trigger" type="submit">Login</button>
            </form>
        </div>

        <script src="../js/login.js"></script>
    </body>
</html>