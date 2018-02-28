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

        checkUser(newHouseName, newHousePassword, username, password, firstName, surname, email, dob);
  
        function checkUser(newHouseName, newHousePassword, username, password, firstName, surname, email, dob) {
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
                    if (data.status == 'Success') {
                        alert("success");
                    }
                    if (data.status == 'Error') {
                        alert("error");
                    }
                    if (data.status == 'Taken') {
                        alert("Taken");
                    }
                },
                error: function() {
                    console.log("Signup was unsuccessful");
                    if (data.status == 'Error') {
                        alert("Error");
                    }
                }
            });
        }
    });
  }
  
  $(document).ready(function() {
    submit();
  });