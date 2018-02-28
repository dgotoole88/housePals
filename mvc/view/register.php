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
            <form id="inputContainer" method="post">
                <div id="alignContainers">
                    <h2 class="loginRegister">Register</h2>

                    <div id="regPageOne">
                        <div class="butts">
                            <input class="buttonText" name="new" type="button" value="CREATE NEW HOUSE PALS GROUP?" onclick="createNew()">
                        </div>
                        <div class="butts">
                            <input class="buttonText" name="existing" type="button" value="Join existing House Pals group?" onclick="joinExisting()">
                        </div>
                    </div>

                    <div id="regCreate">
                        <div class="loginInputs">
                            <span class="inputLabel">House Name</span>
                            <input type="text" name="newHouseName">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Password</span>
                            <input type="text" name="newHousePassword">
                        </div>
                        <div class="butts">
                            <input class="buttonText" type="button" value="Back" onclick="createBack()">
                            <input class="buttonText" type="button" value="Next" onclick="createNext()">
                        </div>
                    </div>

                    <div id="regExist">
                        <div class="loginInputs">
                            <span class="inputLabel">House Name</span>
                            <input type="text" name="existingHouseName">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Password</span>
                            <input type="text" name="existingHousePass">
                        </div>
                        <div class="butts">
                            <input class="buttonText" type="button" value="Back" onclick="existBack()">
                            <input class="buttonText" type="button" value="Next" onclick="createNext()">
                        </div>
                    </div>

                    <div id="regPageFour">
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
                            <input type="text" name="firstName">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Surname</span>
                            <input type="text" name="surname">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Email</span>
                            <input type="text" name="email">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">DOB</span>
                            <input type="date" name="dob">
                        </div>
                        <div id="submitButton">
                            <input class="buttonText" type="button" name="back" value="Back" onclick="pageFourBack()">
                            <input class="buttonText" type="button" name="next" value="Finish">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer><?php include "footer.php"; ?></footer>
    </body>
</html>