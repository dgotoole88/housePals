<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="view/css/housePals.css">
        <script src="../js/housePals.js"></script>
        <?php
            include "view/logoutHeader.php";
        ?>
    </head>
    <body>
        <div id="loginContainer">
            <div id="inputContainer">   
                <div id="alignContainers">
                    <h2 class="loginRegister">Login</h2>
                    <div class="loginInputs">
                        <span class="inputLabel">Username</span>
                        <input type="text" name="username">
                    </div>
                    <div class="loginInputs">
                        <span class="inputLabel">Password</span>
                        <input type="text" name="password">
                    </div>
                    <div id="submitButton">
                        <button type="submit" name="submit" value="submit">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <footer><?php include "view/footer.php"; ?></footer>
    </body>
</html>