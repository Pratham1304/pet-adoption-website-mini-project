<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petcare";

$con = new mysqli($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed");
}

?>