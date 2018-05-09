<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="view/css/housePals.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/housePals.js"></script>
        <script src="../js/login.js"></script>
        <?php
            include "view/logoutHeader.php";
            include "model/housePals.php";
        ?>
    </head>
    <body>
        <div id="loginContainer">
            <form id="inputContainer" method="post">
                <div id="alignContainers">
                    <h2 class="loginRegister">Login</h2>
                    <div class="loginInputs">
                        <span class="inputLabel">Username</span>
                        <input type="text" id="username" pattern="^[a-z0-9]{3,15}$" required>
                    </div>
                    <div class="loginInputs">
                        <span class="inputLabel">Password</span>
                        <input type="password" value="Trunks321123" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                    </div>
                    <div id="submitButton">
                        <button id="submit" class="buttonText" type="button">Login</button>
                    </div>
                </div>
            </form>
            <div id="errorModal">
                <h2 class="responseText">Incorrect username or password</h2>
            </div>
            <div id="incorrectInfo">
                <h2 class="responseText">The information you entered is incorrect</h2>
            </div>
        </div>
        <footer><?php include "view/loginFooter.php"; ?></footer>
    </body>
</html>