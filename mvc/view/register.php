<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/housePals.css">
        <script src="../../js/housePals.js"></script>
        <?php
            include "registerHeader.php";
        ?>
    </head>
    <body>
        <div id="registerContainer">
            <div id="inputContainer">
                <h2 class="loginRegister">Register</h2>
                <div class="loginInputs">
                    <span class="inputLabel">Username</span>
                    <input type="text" name="username">
                </div>
                <div class="loginInputs">
                    <span class="inputLabel">Password</span>
                    <input type="text" name="password">
                </div>
                <div class="loginInputs">
                    <span class="inputLabel">First name</span>
                    <input type="text" name="password">
                </div>
                <div class="loginInputs">
                    <span class="inputLabel">Surname</span>
                    <input type="text" name="password">
                </div>
            </div>
        </div>
        <footer><?php include "footer.php"; ?></footer>
    </body>
</html>