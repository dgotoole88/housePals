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
                        alert(data.message);
                    }
                    if (data.status == 'error') {
                        alert(data.message);
                    }
                },
                error: function(data) {
                    alert("AJAX error");
                }
            });
    });
  }
  
  $(document).ready(function() {
    submit();
  });