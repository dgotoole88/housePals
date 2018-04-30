function submit() {
    $("#submit").click(function(e) {
        
        // Set all variables
        var newHouseName = $('#newHouseName').val();
        var newHousePassword = $('#newHousePassword').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var firstName = $('#firstName').val();
        var surname = $('#surname').val();
        var email = $('#email').val();
        var dob = $('#dob').val();

        if(newHouseName && newHousePassword && username && password && firstName && surname && email && dob != ''){
            
            var checkNewHouseName = document.getElementById('newHouseName');
            var checkHousePass = document.getElementById('newHousePassword');
            var checkUsername = document.getElementById('username');
            var checkPassword = document.getElementById('password');
            var checkFirstName = document.getElementById('firstName');
            var checkSurname = document.getElementById('surname');
            var checkEmail = document.getElementById('email');
            var checkDob = document.getElementById('dob');
            
            var testHouseName = checkNewHouseName.checkValidity();
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
                    checkUser(newHouseName, newHousePassword, username, password, firstName, surname, email, dob);
                }
        }else{
            document.getElementById("emptyInput").style.display = 'block';
        }

        function checkUser(newHouseName, newHousePassword, username, password, firstName, surname, email, dob){
            $.ajax({
                type: 'POST',
                datatype: 'json',
                url: '../controller/regUser.php',
                data: {
                    newHouseName: newHouseName,
                    newHousePassword: newHousePassword,
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
                        document.getElementById("registrationSuccessDiv").style.display = "block";
                        document.getElementById("regoError").style.display = "none";
                        document.getElementById("regoTakenLogin").style.display = "none";
                        document.getElementById("regoTakenHouse").style.display = "none";
                        document.getElementById("incorrectInfo").style.display = "none";
                        document.getElementById("emptyInput").style.display = "none";
                    }
                    if (data.status == 'error') {
                        if(data.message == 'This was unsuccessful'){
                            document.getElementById("regoError").style.display = "block";
                            document.getElementById("regoTakenLogin").style.display = "none";
                            document.getElementById("regoTakenHouse").style.display = "none";
                            document.getElementById("incorrectInfo").style.display = "none";
                            document.getElementById("emptyInput").style.display = "none";
                        }
                        if (data.message == 'Login Taken'){
                            document.getElementById("regoError").style.display = "none";
                            document.getElementById("regoTakenLogin").style.display = "block";
                            document.getElementById("regoTakenHouse").style.display = "none";
                            document.getElementById("incorrectInfo").style.display = "none";
                            document.getElementById("emptyInput").style.display = "none";
                        }
                        if (data.message == 'House Name Taken'){
                            document.getElementById("regoError").style.display = "none";
                            document.getElementById("regoTakenLogin").style.display = "none";
                            document.getElementById("regoTakenHouse").style.display = "block";
                            document.getElementById("incorrectInfo").style.display = "none";
                            document.getElementById("emptyInput").style.display = "none";
                        }
                    }
                },
                error: function() {
                    console.log("AJAX ERROR:");
                    alert("Data Error");
                }
            });
        }
    });
}
  
$(document).ready(function() {
    submit();
});