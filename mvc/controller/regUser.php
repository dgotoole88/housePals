<?php
    header("Content-type: application/json");

    include 'model/housePals.php';

    $count = 0;

    // validate user input
    function test_Reginput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST) & !empty($_POST)){
        $houseName = filter_var(test_Reginput($_POST['newHouseName']), FILTER_SANITIZE_STRING);
        $housePass = filter_var(test_Reginput($_POST['newHousePassword']), FILTER_SANITIZE_STRING);

        $username = filter_var(test_Reginput($_POST['username']), FILTER_SANITIZE_STRING);
        $password = filter_var(test_Reginput($_POST['password']), FILTER_SANITIZE_STRING);
        $firstName = filter_var(test_Reginput($_POST['firstName']), FILTER_SANITIZE_STRING);
        $surname = filter_var(test_Reginput($_POST['surname']), FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $dob = $_POST['dob'];

        $sqlReserved = "SELECT COUNT(*) FROM login WHERE username='$username'";
        $res = $pdo->query($sqlReserved);
        $count = $res->fetchColumn();

        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        $response = array(); // Array to json encode

        if($count == 0){
            $sqlLogin = "INSERT INTO login (username, password) VALUES ('$username', '$hashedPass')";
            $resultLogin = $pdo->query($sqlLogin);

            $response['status'] = 'Success';                // Set response status
            $response['message'] = 'This was successful';   // Set message status
    
            if($resultLogin){
                $sqlUser = "INSERT INTO user (firstName, surname, email, dob, profilePic, loginID, houseID) VALUES ('$firstName', '$surname', '$email', '$dob', '../view/images/profilePic/unknown.jpg', (SELECT loginID FROM login WHERE username='$username'), (SELECT houseID from house WHERE houseName = '$houseName'))";
                $result = $pdo->query($sqlUser);
                if($result){
                    $response['status'] = 'Success';                // Set response status
                    $response['message'] = 'This was successful';   // Set message status
                }else{
                    $response['status'] = 'Error';                  // Set response status
                    $response['message'] = 'This was unsuccessful'; // Set message status
                    unset($_SESSION["currentUser"]);
                }
            }else{
                $response['status'] = 'Error';                  // Set response status
                $response['message'] = 'This was unsuccessful'; // Set message status
            }
        }else{
            $response['status'] = 'Taken';                  // Set response status
            $response['message'] = 'This was unsuccessful'; // Set message status
        }
        echo json_encode($response);    // echo response as json
    }
?>