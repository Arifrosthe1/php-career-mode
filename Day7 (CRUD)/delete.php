<?php
include 'db-connect.php';

// Get the user ID
$id = $_GET['id'] ?? 0;

if ($id > 0) {
    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql)) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    echo "Invalid ID!";
}

// Redirect back to read.php
header("Location: read.php");
exit;
?>
