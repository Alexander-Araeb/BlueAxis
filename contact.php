<!DOCTYPE html>
<html lang="en">

<head>
    <title>CONTACT</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="nav_footer.css">
    <link rel="shortcut icon" type="x-icon" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="contactvalidation.js" defer></script>
</head>

<body>

    <div class="maincontainer">
   
        <div class="logo1">
            <img src="KOI.png" alt="KOI" width="300">
        </div>
    
        <div class="navc">
          <a class="nav" href="index.php">HOME</a>
          <a class="nav" href="about.php">ABOUT</a>
          <a class="nav" href="login.php">KOI PORTAL</a>
          <a class="navactive" href="contact.php">CONTACT</a>
          <a class="nav" href="#">FAQ</a>
        </div>

        <div class="formcontainer">

            <div class="form">
                <div class="contactformtitle">
                    Contact Form
                </div>
                <form action="process-contact.php" method="post" id="contact" novalidate>
                    <div>
                        <input type="text" id="_name" name="_name" placeholder="Name" />
                    </div>
                    <div class="spacer1"></div>
                    <div>
                        <input type="text" id="_phone" name="_phone" placeholder="Phone Number: 0811234567" />
                    </div>
                    <div class="spacer1"></div>
                    <div>
                        <input type="email" id="_email" name="_email" placeholder="Email: example@domain.com" />
                    </div>
                    <div class="spacer1"></div>
                    <div>
                        <textarea id="_message" name="_message" placeholder="Your message..."></textarea>
                    </div>
                
                    <div class="spacer2"></div>
                    <div>
                        <button class="t1">SUBMIT</button>
                    </div>
                </form>
            
            </div>
        </div>

        <?php
        include 'footer.php';
        ?>

        <div class="footer">
            © FACTOREM 2024
        </div>
    </div>

</body>
</html>