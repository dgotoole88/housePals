<!DOCTYPE HTML>
<html>
    <head>
        <?php
            include "controller/sessionStart.php";
        ?>
    </head>
    <body>
        <footer id="footerDiv">
            <?php
                print_r($_SESSION);
            ?>
        </footer>
    </body>
</html>