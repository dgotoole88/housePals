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

     //   checkUser(newHouseName, newHousePassword, username, password, firstName, surname, email, dob);
  
    //    function checkUser(newHouseName, newHousePassword, username, password, firstName, surname, email, dob) {
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
                        username.val = "";
                    }
                    if (data.status == 'error') {
                        document.getElementById("regoError").style.display = "block";
                        document.getElementById("regoTakenLogin").style.display = "none";
                        document.getElementById("regoTakenHouse").style.display = "none";
                    }
                    if (data.status == "loginTaken"){
                        document.getElementById("regoTakenLogin").style.display = "block";
                        document.getElementById("regoTakenHouse").style.display = "none";
                        document.getElementById("regoError").style.display = "none";
                    }
                    if (data.status == 'houseTaken') {
                        document.getElementById("regoTakenHouse").style.display = "block";
                        document.getElementById("regoTakenLogin").style.display = "none";
                        document.getElementById("regoError").style.display = "none";
                    }
                },
                error: function() {
                    console.log("Signup was unsuccessful");
                    if (data.status == 'error') {

                    }
                }
            });
      //  }
    });
  }
  
  $(document).ready(function() {
    submit();
  });