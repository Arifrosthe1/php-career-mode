<?php
include 'db-conn.php';


// Fetch records from the database
$sql = "SELECT * FROM orang";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
    <h2>List of Users</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><a href="update.php?id=<?= $row['id'] ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a></td>

        </tr>
        
        <?php endwhile; ?>

    </table>
    <p><a href="create.php">Creat New Data</a></p>
    </body>
</html>

