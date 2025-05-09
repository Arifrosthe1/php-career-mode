<?php
include 'db-connect.php';

$id = $_GET['id']; // Get the user ID from the URL
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// If no user found, redirect to the list
if (!$row) {
    header("Location: read.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update the data in the database
    $username = $_POST['username'];
    $email = $_POST['email'];

    $update_sql = "UPDATE users SET username='$username', email='$email' WHERE id=$id";
    if ($conn->query($update_sql) === TRUE) {
        header("Location: read.php"); // Redirect back to list after success
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="edit.php?id=<?= $id ?>" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" value="<?= $row['username'] ?>" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="<?= $row['email'] ?>" required><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
