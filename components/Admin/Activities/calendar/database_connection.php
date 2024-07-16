<?php
$hostname = "localhost";
$username = "root";
$password = "";  
$database = "sasd_db";   
$con = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
