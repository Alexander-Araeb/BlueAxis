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
            <img src="KOI.png" alt="KOI" width="200">
        </div>
    
        <div class="navc">
          <a class="nav" href="index.php">HOME</a>
          <a class="nav" href="about.php">ABOUT</a>
          <a class="nav" href="login.php">KOI PORTAL</a>
          <a class="navactive" href="contact.php">CONTACT</a>
          <a class="nav" href="#">FAQ</a>
        </div>

        <div class="message_submitted">
            Your message has successfully been sent. An agent will contact you.
            <a href="contact.php" style="text-decoration: none;"><button2>Submit new message</button2><a>
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