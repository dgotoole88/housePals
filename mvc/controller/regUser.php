<?php
    header("Content-type: application/json");

    include '../model/housePals.php';

    // Set count values to 0.
    $countUserLogin = 0;
    $countHouseName = 0;

    // validate user input
    function testRegInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST) & !empty($_POST)){
        // Existing house details
      //  $existingHouseName = filter_var(testRegInput($_POST['existingHouseName']), FILTER_SANITIZE_STRING);
      //  $existingHousePass = filter_var(testRegInput($_POST['existingHousePass']), FILTER_SANITIZE_STRING);
        // New house details
        $houseName = filter_var(testRegInput($_POST['newHouseName']), FILTER_SANITIZE_STRING);
        $housePass = filter_var(testRegInput($_POST['newHousePassword']), FILTER_SANITIZE_STRING);
        // Personal user information
        $username = filter_var(testRegInput($_POST['username']), FILTER_SANITIZE_STRING);
        $password = filter_var(testRegInput($_POST['password']), FILTER_SANITIZE_STRING);
        $firstName = filter_var(testRegInput($_POST['firstName']), FILTER_SANITIZE_STRING);
        $surname = filter_var(testRegInput($_POST['surname']), FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $dob = $_POST['dob'];

        // Count the number of times the entered username appears in the login table
        $sqlReserved = "SELECT COUNT(*) FROM login WHERE username='$username'";
        $res = $pdo->query($sqlReserved);
        $countUserLogin = $res->fetchColumn();

        // Count the number of times the entered house name appears in the house table
        $sqlCountHouse = "SELECT COUNT(*) FROM house WHERE houseName='$houseName'";
        $houseResult = $pdo->query($sqlCountHouse);
        $countHouseName = $houseResult->fetchColumn();

        // Hash the login and house passwords
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        $hashedHousePass = password_hash($housePass, PASSWORD_DEFAULT);

        // Array to json encode
        $response = array();

        // Statement is true if the entered username and house name have not been taken
        if($countUserLogin == 0 && $countHouseName == 0){
            // Insert new login details into the login table (Password is hashed)
            $sqlLogin = "INSERT INTO login (username, password) VALUES ('$username', '$hashedPass')";
            $resultLogin = $pdo->query($sqlLogin);

            // Insert new house details into the house table (Password is hashed)
            $sqlHouse = "INSERT INTO house (houseName, housePassword) VALUES ('$houseName', '$hashedHousePass')";
            $resultHouse = $pdo->query($sqlHouse);

            $response['status'] = 'success';                // Set response status
            $response['message'] = 'This was successful';   // Set message status

            // If the login and house details have been inserted in the db correctly the statement is true
            if($resultLogin && $resultHouse){
                // Insert personal information into the user table
                $sqlUser = "INSERT INTO user (firstName, surname, email, dob, profilePic, loginID, houseID) 
                            VALUES ('$firstName', '$surname', '$email', '$dob', '../view/images/profilePic/unknown.jpg', (SELECT loginID FROM login WHERE username='$username'), 
                            (SELECT houseID from house WHERE houseName = '$houseName'))";
                $result = $pdo->query($sqlUser);
                if($result){
                    $response['status'] = 'success';                // Set response status
                    $response['message'] = 'This was successful';   // Set message status
                }else{
                    $response['status'] = 'error';                  // Set response status
                    $response['message'] = 'This was unsuccessful'; // Set message status
                    unset($_SESSION["currentUser"]);
                }
            }else{
                $response['status'] = 'error';                      // Set response status
                $response['message'] = 'This was unsuccessful';     // Set message status
            }
        }elseif($countUserLogin > 0){
            $response['status'] = 'loginTaken';                    // Set response status
            $response['message'] = 'Login Taken';             // Set message status
        }elseif($countHouseName > 0){
            $response['status'] = 'houseTaken';                    // Set response status
            $response['message'] = 'House Name Taken';        // Set message status
        }else{
            $response['status'] = 'error';                    // Set response status
            $response['message'] = 'Unknown error';           // Set message status
        }
        // echo response as json
        echo json_encode($response);
    }
?>