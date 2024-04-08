<?php

session_start();
session_destroy();

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user){

        if (password_verify($_POST["password"], $user["password_hash"])){


            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: portal.php");
            exit;
        }
    }

    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" type="x-icon" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: #ecf0f4;">

    <div class="maincontainer">

        <div class="logincontainer">
            <div class="r1">
                <div class="koilogo1"></div>
            </div>
            <div class="spacer1"></div>

            <div class="invalidlogin">
                <?php if ($is_invalid): ?>
                    <em>Invalid email or password</em>
                <?php endif; ?>
            <div class="spacer1"></div>
            </div>

            <form method="post">
                <div>
                    <input type="email" id="email" name="email" placeholder="Email: example@testing.com" 
                    value="<?= htmlspecialchars($_POST["email"] ?? "")?>" >
                </div>
                <div class="spacer1"></div>
                <div>
                    <input type="password" id="password" name="password" placeholder="Password: mysecretpassword123" >
                </div>
                    
                <div class="spacer2"></div>
                <div>
                    <button class="t1">LOGIN</button>
                </div>

            </form>

              <div class="spacer1"></div>

            <div class="r2">
                <div class="inputs">
                    <button2><a class="t1" href="register.php">REGISTER</a></button2>
                </div>
                <div class="inputs">
                    <button2><a class="t1" href="index.php">CANCEL</a></button2>
                </div>
                
            </div>

        </div>

    </div>

        <div class="footer">
            © FACTOREM 2024
          </div>

</body>
</html>