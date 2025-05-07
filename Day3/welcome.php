
<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "arif" && $password == "12345") {
    echo "Welcome, $username!";
  } else {
    echo "Access denied.";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome to <i>Aremore CLUB</i></h2>
    <h3>Hello, <?php echo $username; ?>!</h3>
    <p>Your password is: <?php echo $password; ?></p>
    <p>Thank you for logging in!</p>
    <p><a href="login.php">Go back to login page</a></p>
</body>
</html>