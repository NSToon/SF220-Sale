<?php
$servername = "localhost";
$username = "root";
$password = ""; // Replace 'your_mysql_password' with your actual MySQL root password
$dbname = "sf220_database";
$port = 5000;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   // echo "Connected successfully";
}
?>
