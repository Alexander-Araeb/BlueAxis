<?php

if (empty($_POST["firstname"])){
    die("First name is required");
}

if (empty($_POST["lastname"])){
    die("Last name is required");
}

if ( ! preg_match("/[0-9]/", $_POST["phone"])){
    die("Phone number is required.");
}

if (strlen($_POST["phone"]) < 10){
    die("Password must be at least 8 characters.");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Invalid email address.");
}

if (strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters.");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one letter.");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])){
    die("Password must contain at least one number.");
}

if ( $_POST["password"] !== $_POST["repeat_password"]){
    die("Passwords must match.");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ ."/database.php";

$sql = "INSERT INTO users (firstname, lastname, phone, email, password_hash)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ($stmt->prepare($sql) == false) {
    die ("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssss",
                $_POST["firstname"],
                $_POST["lastname"],
                $_POST["phone"],
                $_POST["email"],
                $password_hash);

try{
    $stmt->execute();
    header("Location: login.php");
    exit;
    } 

catch (Exception $e) {
    if ($mysqli->errno == 1062){
        die("Email or phone number already registered.");
    } else {
        die( $mysqli->error."". $mysqli->errno);
    }
}
