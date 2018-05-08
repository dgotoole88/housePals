function submit() {
    $("#submit").click(function(e) {
        
        // Set all variables
        var username = $('#username').val();
        var password = $('#password').val();

        if(username && password != ''){
            
            var checkUsername = document.getElementById('username');
            var checkPassword = document.getElementById('password');

            var testUsername = checkUsername.checkValidity();
            var testPassword = checkPassword.checkValidity();

            if(testUsername === false || testPassword === false){
                    document.getElementById("incorrectInfo").style.display = 'block';
                }else{
                    document.getElementById("incorrectInfo").style.display = 'none';
                    checkUser(username, password);
                }
        }else{
            document.getElementById("emptyInput").style.display = 'block';
        }

        function checkUser(username, password){
            $.ajax({
                type: 'POST',
                datatype: 'json',
                url: '../mvc/controller/login.php',
                data: {
                    username: username,
                    password: password
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == 'success') {
                        window.location="view/home.php";
                        document.getElementById("errorModal").style.display = "none";
                        document.getElementById("incorrectInfo").style.display = "none";
                        document.getElementById("emptyInput").style.display = "none";
                    }
                    if (data.status == 'error') {
                            document.getElementById("errorModal").style.display = "block";
                            document.getElementById("incorrectInfo").style.display = "none";
                            document.getElementById("emptyInput").style.display = "none";
                    }
                },
                error: function() {
                    console.log("AJAX ERROR:");
                    alert("AJAX ERROR");
                }
            });
        }
    });
}
  
$(document).ready(function() {
    submit();
});