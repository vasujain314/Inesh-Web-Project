<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "webmail";
// Create connection
$conn = new mysqli($servername, $username, $password, $database );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>