<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/housePals.css">
        <script src="../js/housePals.js"></script>
        <?php
            include "header.php";
        ?>
    </head>
    <body>
        <div id="container">
            <div id="topRow">
                <div class="smallRow">
                    <div class="alignText">
                        <h3 class="divTitle">Next Bill Due</h3>
                        <h4 class="divText">Power Bill $350</h4>
                        <h4 class="divText">Date: 20/02/2018</h4>
                    </div>
                    <div class="enterDiv">
                        <h2 class="enterDivText">Bills</h2>
                    </div>
                </div>
                <div class="smallRow">
                    <div class="alignText">
                        <h3 class="divTitle">You owe a total of</h3>
                        <h4 class="divText">$100</h4>
                    </div>
                    <div class="enterDiv">
                        <h2 class="enterDivText">IOU</h2>
                    </div>
                </div>
            </div>
            <div id="middleRow">
                <div class="smallRow">
                    <div class="enterDiv">
                        <h2 class="enterDivText">Shopping Lists</h2>
                    </div>
                </div>
                <div class="smallRow">
                    <div class="enterDiv">
                        <h2 class="enterDivText">Chores</h2>
                    </div>
                </div>
            </div>
            <div id="bottomRow">
                <div class="largeRow">
                    <div class="enterDiv">
                        <h2 class="enterDivText">Calander</h2>
                    </div>
                </div>
                <div class="largeRow">
                    <div class="enterDiv">
                        <h2 class="enterDivText">Chat</h2>
                    </div>
                </div>
            </div>
        </div>
        <footer><?php include "footer.php"; ?></footer>
    </body>
</html>