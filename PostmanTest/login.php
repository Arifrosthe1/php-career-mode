<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'Arif' && $password === '12345') {
    echo "Login Successful!";
} else {
    echo "Login Failed.";
}
?>
<?php
// login.php

// Step 1: Accept data using POST
$username = $_POST['username'] ?? 'not provided';
$password = $_POST['password'] ?? 'not provided';

// Step 2: Return a response (plain text or JSON)
echo "\nUsername: $username\n";
echo "Password: $password\n";
echo "Login Successful!";
// Step 3: Check credentials (for demonstration purposes, using hardcoded values)
?>
