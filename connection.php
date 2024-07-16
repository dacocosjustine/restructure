<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sasd_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set PDO to throw exceptions on error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optional: Logging successful connection (you may remove this in production)
    echo "<script>console.log('Database connection successful');</script>";
} catch(PDOException $e) {
    // Handle connection errors gracefully
    // In production, avoid echoing detailed error messages to users
    echo "Connection failed: " . $e->getMessage();
    // Log the error in a secure way or handle it according to your application's needs
}
?>
