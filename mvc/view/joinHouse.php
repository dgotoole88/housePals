<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/housePals.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../js/housePals.js"></script>
        <script src="../../js/regUserExist.js"></script>
        <?php
            include "registerHeader.php";
        ?>
    </head>
    <body>
        <div id="registerContainer">
            <form id="inputContainer" method="post">
                <div id="alignContainers">
                    <h2 class="loginRegister">Join House</h2>

                    <div id="join">
                        <div class="loginInputs">
                            <span class="inputLabel">House Name</span>
                            <input type="text" id="existingHouseName" name="existingHouseName" pattern="[A-Za-z0-9]{3,15}" required>
                            <div class="formHint">* 3 - 15 letters or numbers.</div>
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">House Pass</span>
                            <input type="password" id="existingHousePass" name="existingHousePass" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                            <div class="formHint">* Min 8 chars. Upper case, lower case & number</div>
                        </div>
                        <div class="loginInputs">
                            <span class="inputLabel">Username</span>
                            <input type="text" id="username" name="username" pattern="^[a-z0-9]{3,15}$" required>
                            <div class="formHint">* 3 - 15 Letters or Numbers. No capitals</div>
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
                            <input class="buttonText" type="button" name="back" value="Back" onclick="window.location.href='register.php'">
                            <button id="submitJoin" name="submitUser" type="button" value="submit" class="buttonText">Submit</button>
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
                <div id="regoError">
                    <h2 id="responseText">Error, Try Again</h2>
                </div>
                <div id="houseRegoError">
                    <h2 id="responseText">House not found</h2>
                </div>
                <div id="emptyInput">
                    <h2 id="responseText">Please answer every question</h2>
                </div>
                <div id="incorrectInfo">
                    <h2 id="responseText">The information you entered is incorrect</h2>
                </div>
                <div id="wrongHousePass">
                    <h2 id="responseText">House username or password is incorrect</h2>
                </div>
            </div>
        </div>
        <footer><?php include "regFooter.php"; ?></footer>
    </body>
</html>