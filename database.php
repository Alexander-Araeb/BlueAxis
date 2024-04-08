<?php
$host= "blueaxis-demo.cho86uycqgm7.eu-north-1.rds.amazonaws.com";
$username = 'dread';
$password = 'dread9643!';
$dbname = 'koi_users';
$port = 3306;

$conn = mysqli_connect($host, $username, $password, $dbname, $port);

return $conn;
