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
                            <input class="buttonText" name="existing" type="button" value="Join existing House Pals group?" onclick="window.location.href='joinHouse.php'">
                        </div>
                    </div>

                    <div id="regCreate">
                        <div class="loginInputs">
                            <span class="inputLabel">House Name</span>
                            <input type="text" id="newHouseName" name="newHouseName" pattern="[a-zA-Z0-9-_\.]{2,15}$" required>
                            <div class="formHint">* Maximum of 15 letters or numbers</div>
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Password</span>
                            <input type="password" id="newHousePassword" name="newHousePassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                            <div class="formHint">* Min 8 chars. Upper case, lower case & number</div>
                        </div>
                        <div class="butts">
                            <input class="buttonText" type="button" value="Back" onclick="createBack()">
                            <input class="buttonText" type="button" value="Next" onclick="createNext()">
                        </div>
                    </div>

                    <div id="regPageFour">
                        <div class="loginInputs">
                            <span class="inputLabel">Username</span>
                            <input type="text" id="username" name="username" pattern="^[a-z0-9]{3,15}$" required>
                            <div class="formHint">* 3 - 15 letters or numbers. No capitals</div>
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Password</span>
                            <input type="password" id="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                            <div class="formHint">* Min 8 chars. Upper case, lower case & number</div>
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">First name</span>
                            <input type="text" id="firstName" name="firstName" pattern="[A-Za-z]{2,32}" required>
                            <div class="formHint">* Upper case and lower case only.</div>
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Surname</span>
                            <input type="text" id="surname" name="surname" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                            <div class="formHint">* Upper case and lower case.</div>
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Email</span>
                            <input type="email" id="email" required>
                            <div class="formHint">* Example: johnsmith@gmail.com</div>
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