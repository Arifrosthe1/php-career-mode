<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "career_mode";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connect
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>