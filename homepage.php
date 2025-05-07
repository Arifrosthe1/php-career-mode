<?php 

$username = "Arif Roshaimizam";
$age = 22;
$today = date("Y-m-d H:i:s");
echo password_hash('admin123', PASSWORD_DEFAULT);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Career Mode</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Welcome to Career Mode</h1>
        </header>
        <main>
            <section class="user-info">
                <h2>User Information</h2>
                <p>Name: <?php echo $username; ?></p>
                <p>Age: <?php echo $age; ?></p>
                <p>Date: <?php echo $today; ?></p>
                <p>You're currently in: <?php echo date("h:i A"); ?> mode.</p>
            </section>
            <section class="career-path">
                <h2>Career Path</h2>
                <p>Choose your career path:</p>
                <ol>
                    <li><a href="developer.php">Developer</a></li>
                    <li><a href="designer.php">Designer</a></li>
                    <li><a href="manager.php">Manager</a></li>
                </ol>
            </section>
        </main>
        <footer>
            <p>&copy; 2023 Career Mode. All rights reserved.</p>
        </footer>
    </body>
</html>