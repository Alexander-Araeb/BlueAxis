<!DOCTYPE html>
<html lang="en">

<head>
    <title>REGISTER</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="register.css">
    <link rel="shortcut icon" type="x-icon" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="validation.js" defer></script>
</head>

<body style="background-color: #ecf0f4;">

    <div class="maincontainer">

        <div class="logincontainer">
            <div class="r1">
                <div class="koilogo1"></div>
            </div>
            <div class="spacer2"></div>

            <form action="process-signup.php" method="post" id="register" novalidate>
                <div>
                    <input type="text" id="firstname" name="firstname" placeholder="First Name" />
                </div>
                <div class="spacer1"></div>
                <div>
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" />
                </div>
                <div class="spacer1"></div>
                <div>
                    <input type="number" id="phone" name="phone" placeholder="Phone Number: 0811234567" />
                </div>
                <div class="spacer1"></div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email: example@testing.com" />
                </div>
                <div class="spacer1"></div>
                <div>
                    <input type="password" id="password" name="password" placeholder="Password: mysecretpassword123" />
                </div>
                <div class="spacer1"></div>
                <div>
                    <input type="password" id="repeat_password" name="repeat_password" placeholder="Repeat password" />
                </div>
              
                <div class="spacer2"></div>
                <div>
                    <button class="t1">REGISTER</button>
                </div>
            </form>
            
            <div class="spacer1"></div>

            <div class="r2">
                <button2><a class="t1" href="login.php">LOGIN</a></button2>
                <button2><a class="t1" href="index.php">CANCEL</a></button2>
            </div>

        </div>

    </div>

        <div class="footer">
            © FACTOREM 2024
          </div>

</body>
</html>