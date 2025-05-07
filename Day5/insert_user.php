
<?php
include 'connect.php'; // Include the database connection file

$username = "Arifros";
$password = "12345678";

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "✅ New user inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Close the database connection
?>