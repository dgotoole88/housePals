<?php
    include 'model/housePals.php';

    if(!isset($_SESSION)){
        session_start();
    }

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

                if($_SESSION['count'] == 1){
                    ?>
                        <script type="text/javascript">
                            window.location="view/home.php";
                        </script>
                    <?php
                }
            }else{
                ?>
                    <script>
                        document.getElementById("errorModal").style.display = 'block';
                    </script>
                <?php
            }
        }else{
            ?>
                <script>
                    document.getElementById("errorModal").style.display = 'block';
                </script>
            <?php
        }
      }else{
      }
?>