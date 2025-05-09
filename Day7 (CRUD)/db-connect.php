<?php

$host="localhost";
$user="root";
$password="";
$db="career_mode";

// Create connection
$conn = mysqli_connect($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>