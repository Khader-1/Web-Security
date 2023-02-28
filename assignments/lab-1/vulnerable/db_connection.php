<?php
// Database configuration
$host = "localhost";
$user = "root";
$password = "1602";
$database = "injection";

// Create a new mysqli object
$conn = new mysqli($host, $user, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $conn->close();
?>
