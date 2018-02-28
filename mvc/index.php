<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="view/css/housePals.css">
        <script src="../js/housePals.js"></script>
        <?php
            include "view/logoutHeader.php";
            include "model/housePals.php";
            include "controller/login.php";
        ?>
    </head>
    <body>
        <div id="loginContainer">
            <div id="errorModal">
                <h2 id="errorText">Incorrect username or password</h2>
            </div>
            <form id="inputContainer" method="post">   
                <div id="alignContainers">
                    <h2 class="loginRegister">Login</h2>
                    <div class="loginInputs">
                        <span class="inputLabel">Username</span>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="loginInputs">
                        <span class="inputLabel">Password</span>
                        <input type="text" id="password" name="password">
                    </div>
                    <div id="submitButton">
                        <button class="buttonText" type="submit" name="submit" value="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <footer><?php include "view/footer.php"; ?></footer>
    </body>
</html>