<?php

if (empty($_POST["_name"])){
    die("Name is required");
}
if ( ! preg_match("/[0-9]/", $_POST["_phone"])){
    die("Phone number is required.");
}

if ( ! filter_var($_POST["_email"], FILTER_VALIDATE_EMAIL)){
    die("Invalid email address.");
}

if (empty($_POST["_message"])){
    die("Message is required");
}

$mysqli = require __DIR__ ."/database.php";

$sql = "INSERT INTO contact (_name, _phone, _email, _message)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ($stmt->prepare($sql) == false) {
    die ("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                $_POST["_name"],
                $_POST["_phone"],
                $_POST["_email"],
                $_POST["_message"]);

try{
    $stmt->execute();
    header("Location: message_submitted.php");
    exit;
    } 

catch (Exception $e) {
    die( $mysqli->error."". $mysqli->errno);
}