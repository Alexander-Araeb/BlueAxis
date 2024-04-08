<?php

$host = "localhost";
$dbname = "koi";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: ". $mysqli->connect_error);
}


<?php
$dbhost = 'blueaxis-demo.cho86uycqgm7.eu-north-1.rds.amazonaws.com';
$dbport = '3306';
$dbname = 'blueaxis-demo';
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport}";
$username = 'dread';
$password = 'dread9643!';

$mysqli = new PDO($dsn, $username, $password);

return $mysqli;
