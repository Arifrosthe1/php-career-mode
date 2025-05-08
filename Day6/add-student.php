<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Student</title>
</head>
<body>
  <h2>Add New Student</h2>
  <form action="store-student.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Add Student">
  </form>
</body>
</html>
