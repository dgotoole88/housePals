<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/housePals.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../js/housePals.js"></script>
        <?php
            include "registerHeader.php";
        ?>
    </head>
    <body>
        <div id="registerContainer">
            <form id="inputContainer" method="post">
                <div id="alignContainers">
                    <h2 class="loginRegister">Register</h2>

                    <div id="regPageOne">
                        <div class="butts">
                            <input class="buttonText" name="new" type="button" value="CREATE NEW HOUSE PALS GROUP?" onclick="window.location.href='createHouse.php'">
                        </div>
                        <div class="butts">
                            <input class="buttonText" name="existing" type="button" value="Join existing House Pals group?" onclick="window.location.href='joinHouse.php'">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer><?php include "regFooter.php"; ?></footer>
    </body>
</html>