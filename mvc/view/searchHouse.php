<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/housePals.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../js/housePals.js"></script>
        <script src="../../js/searchHouse.js"></script>
        <?php
            include "registerHeader.php";
        ?>
    </head>
    <body>
        <div id="registerContainer">
            <form id="inputContainer" method="post">
                <div id="alignContainers">
                    <h2 class="loginRegister">Register</h2>
 
                    <div id="regExist">
                        <div class="loginInputs">
                            <span class="inputLabel">House Name</span>
                            <input type="text" id="existingHouseName" name="existingHouseName">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Password</span>
                            <input type="password" id="existingHousePass" name="existingHousePass">
                        </div>
                        <div class="butts">
                            <input class="buttonText" type="button" value="Back" formaction="register.php">
                            <input class="buttonText" type="button" value="Next" onclick="">
                        </div>
                    </div>
 
                </div>
            </form>
            <div id="reportDivs">
                <div id="houseFound">
                    <h2 id="responseText">House Found</h2>
                </div>
                <div id="noHouseFound">
                    <h2 id="responseText">No house found</h2>
                </div>
            </div>
        </div>
        <footer><?php include "footer.php"; ?></footer>
    </body>
</html>