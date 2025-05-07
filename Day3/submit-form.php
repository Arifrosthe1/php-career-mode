
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mesage = $_POST['message'];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Submitted</title>
</head>
<body>
  <h2>Thank You for Contacting Us!</h2>
  <p>Your name: <?php echo $name; ?></p>
  <p>Your email: <?php echo $email; ?></p>
  <p>Your Message: <?php echo $mesage; ?></p>
</body>
</html>
