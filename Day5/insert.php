<?php
include 'connect.php';  // Include the database connection

// Example user data to insert
$username = "Arif Roshaimizam";
$password = "12345";
$email = "arif@ros.com";

// Insert query
$sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";

// Check if insertion is successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  // Close the connection
?>
