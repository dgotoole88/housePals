function submit() {
    $("#submit").click(function(e) {
        
        // Set all variables
        var existingHouseName = $('#existingHouseName').val();
        var existingHousePass = $('#existingHousePass').val();

        var username = $('#username').val();
        var password = $('#password').val();
        var firstName = $('#firstName').val();
        var surname = $('#surname').val();
        var email = $('#email').val();
        var dob = $('#dob').val();

            $.ajax({
                type: 'POST',
                datatype: 'json',
                url: '../controller/regUserExist.php',
                data: {
                    existingHousePass: existingHousePass,
                    existingHouseName: existingHouseName,
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
                        alert("Success");
                    }
                    if (data.status == 'error') {
                        alert("Error");
                    }
                },
                error: function() {
                    console.log("Signup was unsuccessful");
                    if (data.status == 'error') {
                        alert("Bugger");
                    }
                }
            });
    });
  }
  
  $(document).ready(function() {
    submit();
  });