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
    <title>My Interests</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>My Interests</h1>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="city.php">My City</a></li>
                <li><a href="heritage.php">Cultural Heritage</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h2>My Interests</h2>
        <p>This is the My Interests section.</p>
    </div>
</body>
</html>

