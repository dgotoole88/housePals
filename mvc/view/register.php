<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/housePals.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../js/housePals.js"></script>
        <script src="../../js/register.js"></script>
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
                            <input type="text" id="newHouseName" name="newHouseName">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Password</span>
                            <input type="password" id="newHousePassword" name="newHousePassword">
                        </div>
                        <div class="butts">
                            <input class="buttonText" type="button" value="Back" onclick="createBack()">
                            <input class="buttonText" type="button" value="Next" onclick="createNext()">
                        </div>
                    </div>

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
                            <input class="buttonText" type="button" value="Back" onclick="existBack()">
                            <input class="buttonText" type="button" value="Next" onclick="createNext()">
                        </div>
                    </div>

                    <div id="regPageFour">
                        <div class="loginInputs">
                            <span class="inputLabel">Username</span>
                            <input type="text" id="username" name="username">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Password</span>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">First name</span>
                            <input type="text" id="firstName" name="firstName">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Surname</span>
                            <input type="text" id="surname" name="surname">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Email</span>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">DOB</span>
                            <input type="date" id="dob" name="dob">
                        </div>
                        <div id="submitButton">
                            <input class="buttonText" type="button" name="back" value="Back" onclick="pageFourBack()">
                            <button id="submit" name="submitUser" type="button" value="submit" class="buttonText">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <div id="reportDivs">
                <div id="registrationSuccessDiv">
                    <h2 id="responseText">Successfully Registered</h2>
                </div>
                <div id="regoTakenLogin">
                    <h2 id="responseText">Username Taken</h2>
                </div>
                <div id="regoTakenHouse">
                    <h2 id="responseText">House Name Taken</h2>
                </div>
                <div id="regoError">
                    <h2 id="responseText">Error, Try Again</h2>
                </div>
            </div>
        </div>
        <footer><?php include "footer.php"; ?></footer>
    </body>
</html>