function submit() {
    $("#submitJoin").click(function(e) {
        
        // Set all variables
        var existingHouseName = $('#existingHouseName').val();
        var existingHousePass = $('#existingHousePass').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var firstName = $('#firstName').val();
        var surname = $('#surname').val();
        var email = $('#email').val();
        var dob = $('#dob').val();

        if(existingHouseName && existingHousePass && username && password && firstName && surname && email && dob != ''){
            
            var checkHouseName = document.getElementById('existingHouseName');
            var checkHousePass = document.getElementById('existingHousePass');
            var checkUsername = document.getElementById('username');
            var checkPassword = document.getElementById('password');
            var checkFirstName = document.getElementById('firstName');
            var checkSurname = document.getElementById('surname');
            var checkEmail = document.getElementById('email');
            var checkDob = document.getElementById('dob');
            
            var testHouseName = checkHouseName.checkValidity();
            var testHousePass = checkHousePass.checkValidity();
            var testUsername = checkUsername.checkValidity();
            var testPassword = checkPassword.checkValidity();
            var testFirstName = checkFirstName.checkValidity();
            var testSurname = checkSurname.checkValidity();
            var testEmail = checkEmail.checkValidity();
            var testDob = checkDob.checkValidity();

            if(testHouseName === false || testHousePass === false || testUsername === false || testPassword === false
                || testFirstName === false || testSurname === false || testEmail === false || testDob === false){
                    document.getElementById("incorrectInfo").style.display = 'block';
                }else{
                    document.getElementById("incorrectInfo").style.display = 'none';
                    checkUser(existingHouseName, existingHousePass, username, password, firstName, surname, email, dob);
                }
            }else{
                document.getElementById("emptyInput").style.display = 'block';
            }

        function checkUser(existingHouseName, existingHousePass, username, password, firstName, surname, email, dob){
            $.ajax({
                type: 'POST',
                datatype: 'json',
                url: '../controller/regUserExist.php',
                data: {
                    existingHouseName: existingHouseName,
                    existingHousePass: existingHousePass,
                    username: username,
                    password: password,
                    firstName: firstName,
                    surname: surname,
                    email: email,
                    dob: dob
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == 'success') {
                        document.getElementById("regoTakenLogin").style.display = 'none';
                        document.getElementById("registrationSuccessDiv").style.display = 'block';
                        document.getElementById("houseRegoError").style.display = 'none';
                        document.getElementById("regoError").style.display = 'none';
                        document.getElementById("emptyInput").style.display = 'none';
                        document.getElementById("incorrectInfo").style.display = 'none';
                        document.getElementById("wrongHousePass").style.display = 'none';
                    }
                    if (data.status == 'error') {
                        if(data.message == 'Username taken'){
                            document.getElementById("regoTakenLogin").style.display = 'block';
                            document.getElementById("registrationSuccessDiv").style.display = 'none';
                            document.getElementById("houseRegoError").style.display = 'none';
                            document.getElementById("regoError").style.display = 'none';
                            document.getElementById("emptyInput").style.display = 'none';
                            document.getElementById("incorrectInfo").style.display = 'none';
                            document.getElementById("wrongHousePass").style.display = 'none';
                        }
                        if(data.message == 'House not found'){
                            document.getElementById("regoTakenLogin").style.display = 'none';
                            document.getElementById("registrationSuccessDiv").style.display = 'none';
                            document.getElementById("houseRegoError").style.display = 'block';
                            document.getElementById("regoError").style.display = 'none';
                            document.getElementById("emptyInput").style.display = 'none';
                            document.getElementById("incorrectInfo").style.display = 'none';
                            document.getElementById("wrongHousePass").style.display = 'none';
                        }
                        if(data.message == 'Error, Try Again'){
                            document.getElementById("regoTakenLogin").style.display = 'none';
                            document.getElementById("registrationSuccessDiv").style.display = 'none';
                            document.getElementById("houseRegoError").style.display = 'none';
                            document.getElementById("regoError").style.display = 'block';
                            document.getElementById("emptyInput").style.display = 'none';
                            document.getElementById("incorrectInfo").style.display = 'none';
                            document.getElementById("wrongHousePass").style.display = 'none';
                        }
                        if(data.message == 'Wrong password'){
                            document.getElementById("regoTakenLogin").style.display = 'none';
                            document.getElementById("registrationSuccessDiv").style.display = 'none';
                            document.getElementById("houseRegoError").style.display = 'none';
                            document.getElementById("regoError").style.display = 'none';
                            document.getElementById("emptyInput").style.display = 'none';
                            document.getElementById("incorrectInfo").style.display = 'none';
                            document.getElementById("wrongHousePass").style.display = 'block';
                        }
                    }
                },
                error: function(data) {
                    alert("AJAX error");
                }
            });
        }
    });
  }
  
  $(document).ready(function() {
    submit();
  });