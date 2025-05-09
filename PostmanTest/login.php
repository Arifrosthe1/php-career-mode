<?php
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');
// Check if username and password are set

if ($username === 'Arif' && $password === '12345') {
    echo "Login Successful! Hi $username";
} else {
    echo "Username or Password is incorrect!";
}
?>
