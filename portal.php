<?php

session_start();

if (isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ ."/database.php";

    $sql = "SELECT * FROM users WHERE id = '{$_SESSION["user_id"]}'";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    $sql = "SELECT * FROM meters WHERE meterID='{$user["meter"]}'";

    $result = $mysqli->query($sql);

    $meter = $result->fetch_assoc();


    $available=$meter["available"];

    $ave=$meter["ave"];

    $arr=$meter["arr"];

    $pre=$meter["pre"];

    $stat=$meter["stat"];

    $net=$meter["net"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>KOI PORTAL</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="portal.css">
    <link rel="shortcut icon" type="x-icon" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: #ecf0f4">

<?php if (isset($user)): ?>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <a href="#">USAGE DATA</a>
          <a href="#">TOP-UP CREDIT</a>
          <a href="#">CONTROLS</a>
          <a href="index.php">KOI</a>
          <a href="#">PROFILE</a>
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
          <a href="login.php">LOG OUT</a>
        </div>
      </div>

    <div class="column one"></div>

    <div class="column top">
        <div class="logo container">
            <img src="KOI.png" alt="KOI" width="200" height="200" onclick="openNav()">
        </div>
    </div>
    <div class="row">
        <div class="column left">
            <img src="KOI.png" alt="KOI" width="100" height="100" onclick="openNav()">
        </div>

        <div class="column middle">
            KOI HYDRO-TECHNOLOGY
        </div>

        <div class="column right">
            <div class="container" onclick="openNav()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
        </div>

        <div class="text1">
            ______________________________
        </div>

        <div class="text2">
            Hello, <?=htmlspecialchars($user["firstname"]) ?>
        </div>

        <div class="break"></div>
        
    </div class='row'>

    <div class="row">
        <div class="column side2"></div>

        <div class="column middle2">
            <div class="column middle3">
                <div class="column row1">
                    <div class="box1">
                        <div class="boxcontent1">
                            AVAILABLE (L):
                        </div>
                        <div class="boxcontent2">
                            <?=htmlspecialchars($available) ?>
                        </div>
                    </div>
                </div>
                
                <hr class="black">
                
                <div class="column row1">
                    <div class="box1">
                        <div class="boxcontent1">
                            AVE. USAGE (L):
                        </div>
                        <div class="boxcontent2">
                            <?=htmlspecialchars($ave) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vl"></div>

            <div class="column middle3">
                <div class="column row1">
                    <div class="box1">
                        <div class="boxcontent1">
                            ARREARS (N$):
                        </div>
                        <div class="boxcontent2">
                            <?=htmlspecialchars($arr) ?>
                        </div>
                    </div>
                </div>
                
                <hr class="black">
                
                <div class="column row1">
                    <div class="box1">
                        <div class="boxcontent1">
                            PREV. USAGE (L):
                        </div>
                        <div class="boxcontent2">
                            <?=htmlspecialchars($pre) ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="vl"></div>

            <div class="column middle3">
                <div class="column row1">
                    <div class="box1">
                        <div class="boxcontent1">
                            STATUS:
                        </div>
                        <div class="boxcontent2">
                            <?=htmlspecialchars($stat) ?>
                        </div>
                    </div>
                </div>
                
                <hr class="black">

                <div class="column row1">
                    <div class="box1">
                        <div class="boxcontent1">
                            NETWORK:
                        </div>
                        <div class="boxcontent2">
                            <?=htmlspecialchars($net) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div class="column middle2">

        <div class="column side2"></div>

    </div class='row'>

    <div class="break"></div>

    <div class="text3">
        METER NUMBER:
    </div>

    <div class="text1">
        ______________________________
    </div>
    <div class="text4">
        <?=htmlspecialchars($user["meter"]) ?>
    </div>

    <div class="break"></div>


    <div class="footer">© BLUEAXIS 2024</div>
    


    
    <script>

        function myFunction(x) {
          x.classList.toggle("change");
        }
        function openNav() {
              document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
              document.getElementById("myNav").style.width = "0%";
            }

        </script>

        

<?php else: ?>

    <div class="notloggedin">
        You are not logged in. Please log in _ <a class="t1" href="login.php">here.</a>
    </div>
    <div class="footer">© BLUEAXIS 2024</div>

<?php endif; ?>

</body>
</html>