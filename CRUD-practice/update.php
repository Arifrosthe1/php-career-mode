<?php
include 'db-conn.php';




if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    // Fetch the existing data for the user
    $id = $_GET['id'];
    $select_sql = "SELECT * FROM orang WHERE id = $id";
    $result = $conn->query($select_sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update the data in the database
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $update_sql = "UPDATE orang SET username = '$username', email = '$email', age = '$age' WHERE id = $id";
    if ($conn->query($update_sql) === TRUE) {
        header("Location: read.php"); // Redirect to the list after success
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
if (!isset($user)) {
    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        
        <label for="username">Username:</label><br>
        <input type="text" name="username" value="<?php echo $user['username']; ?>" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" value="<?php echo $user['age'] ?? ''; ?>" required><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>