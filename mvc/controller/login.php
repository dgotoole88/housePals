<?php
    header("Content-type: application/json");

    include '../model/housePals.php';
    include 'sessionStart.php';

    $_SESSION['count'] = 0;
    $_SESSION['currentUser'] = '';

    function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      if(isset($_POST) & !empty($_POST)){
        $username = filter_var(testInput($_POST['username']), FILTER_SANITIZE_STRING);
        $password = filter_var(testInput($_POST['password']), FILTER_SANITIZE_STRING);

        $response = array();

        $checkUsername = "SELECT COUNT(*) FROM login WHERE username='$username'";
        $result = $pdo->query($checkUsername);
        $userResult = $result->fetchColumn();

        if($userResult > 0){
            $hashedPass = "SELECT password FROM login WHERE username= '$username'";
            $hashResult = $pdo->query($hashedPass);
            $hashReturn = $hashResult->fetchColumn();

            if(password_verify($password, $hashReturn)) {
                $_SESSION['count'] = 1;
                $_SESSION['currentUser'] = $username;

                $response['status'] = 'success';               // Set response status
                $response['message'] = 'successful login';     // Set message status
            }else{
                $response['status'] = 'error';                              // Set response status
                $response['message'] = 'Username or password incorrect';    // Set message status
            }
        }else{
            $response['status'] = 'error';                              // Set response status
            $response['message'] = 'User not found';                    // Set message status
        }

        echo json_encode($response);
    }
?>