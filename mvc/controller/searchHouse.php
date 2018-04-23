<?php
    header("Content-type: application/json");

    include '../model/housePals.php';

    $_SESSION['houseFound'] = '';

    // Set count values to 0.
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
        $existingHouseName = filter_var(testRegInput($_POST['existingHouseName']), FILTER_SANITIZE_STRING);
        $existingHousePass = filter_var(testRegInput($_POST['existingHousePass']), FILTER_SANITIZE_STRING);

        // Count the number of times the entered house name appears in the house table
        $sqlCountHouse = "SELECT COUNT(*) FROM house WHERE houseName='$existingHouseName'";
        $houseResult = $pdo->query($sqlCountHouse);
        $countHouseName = $houseResult->fetchColumn();

        // Array to json encode
        $response = array();

        // Statement is true if the entered username and house name have not been taken
        if($countHouseName == 1){

            $hashedPass = "SELECT housePassword FROM house WHERE houseName = '$existingHouseName'";
            $hashResult = $pdo->query($hashedPass);
            $hashReturn = $hashResult->fetchColumn();

            if(password_verify($existingHousePass, $hashReturn)) {
                $response['status'] = 'houseFound';                    // Set response status
                $response['message'] = 'House Found';                  // Set message status

                $_SESSION['houseFound'] = $existingHouseName;
            }else{
                $response['status'] = 'error';                    // Set response status
                $response['message'] = 'Incorrect details';       // Set message status

                $_SESSION['houseFound'] = '';
            }

        }else{
            $response['status'] = 'error';                // Set response status
            $response['message'] = 'House not found';     // Set message status
            $_SESSION['houseFound'] = '';
        }

        // echo response as json
        echo json_encode($response);
    }
?>