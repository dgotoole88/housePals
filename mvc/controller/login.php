<?php
    include 'model/housePals.php';

    if(!isset($_SESSION)){
        session_start();
    }

    $_SESSION['count'] = 0;

    function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      if(isset($GET) & !empty($_POST)){
        $username = filter_var(testInput($_POST['username']), FILTER_SANITIZE_STRING);
        $password = filter_var(testInput($_POST['password']), FILTER_SANITIZE_STRING);

        $hashedPass = "SELECT password FROM login WHERE username= '$username'";
        $hashResult = $pdo->query($hashedPass);
        $hashReturn = $hashResult->fetchColumn();
        
        $_SESSION['currentUser'] = $username;

        $checkUsername = "SELECT COUNT(*) FROM login WHERE username='$username'";
        $result = $pdo->query($checkUsername);
        $userResult = $result->fetchColumn();

        if($userResult > 0){
            $_SESSION['count'] = 1;
            $_SESSION['currentUser'] = $username;

            $sqlUser = "SELECT user.userID FROM user JOIN login ON user.loginID = login.loginID WHERE login.username = '$username'";
            $userRes = $pdo->query($sqlUser);
            $usersID = $userRes->fetchColumn();
    
            $_SESSION['userID'] = $usersID;

            ?>
                <script type="text/javascript">
                    window.location="view/home.php";
                </script>
            <?php
        }else{
            unset($_SESSION["currentUser"]);
        }
      }else{
        unset($_SESSION["currentUser"]);
      }
?>