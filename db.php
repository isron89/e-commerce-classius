<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "store_db";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>