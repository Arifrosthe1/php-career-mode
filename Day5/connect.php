
<?php
$host = "localhost"; // Database host
$user = "root"; // Database username
$password = ""; // Database password
$dbname = "career_mode"; // Database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected to MySQL successfully!<br><br>"; // echo "Connected successfully"; // Optional: Uncomment for debugging
}

?>