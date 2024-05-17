<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>About Me</h1>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="interests.php">My Interests</a></li>
                <li><a href="city.php">My City</a></li>
                <li><a href="heritage.php">Cultural Heritage</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h2>About Me</h2>
        <p>This is the About Me section.</p>
    </div>
</body>
</html>
