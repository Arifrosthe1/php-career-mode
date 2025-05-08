<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "career_mode";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];

// Insert into table
$sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "✅ Student added successfully!";
} else {
  echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
