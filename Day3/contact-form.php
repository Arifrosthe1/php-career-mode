<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
</head>
<body>
  <h2>Contact Us</h2>
  <form action="submit-form.php" method="post">
    <input type="text" name="name" placeholder="your name" required><br><br>
    <input type="email" name="email" placeholder="your email" required><br><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="30" required></textarea><br><br>
    <input type="submit" value="Masukkan">
  </form>
  <br><br>
    
</body>
</html>
