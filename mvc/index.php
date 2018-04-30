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
            <form id="inputContainer" method="post">
                <div id="alignContainers">
                    <h2 class="loginRegister">Login</h2>
                    <div class="loginInputs">
                        <span class="inputLabel">Username</span>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="loginInputs">
                        <span class="inputLabel">Password</span>
                        <input type="password" value="Trunks321123" id="password" name="password" required>
                    </div>
                    <div id="submitButton">
                        <button class="buttonText" type="submit" name="submit" value="submit">Login</button>
                    </div>
                </div>
            </form>
            <div id="errorModal">
                <h2 id="errorText">Incorrect username or password</h2>
            </div>
        </div>
        <footer><?php include "view/loginFooter.php"; ?></footer>
    </body>
</html>