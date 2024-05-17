


<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
include("connect.php");

$email = $conn->real_escape_string($_SESSION['email']);
$stmt = $conn->prepare("SELECT firstName, lastName FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Welcome to My Blog</h1>
        <nav>
            <ul>
                <li><a href="about.php">About Me</a></li>
                <li><a href="interests.php">My Interests</a></li>
                <li><a href="city.php">My City</a></li>
                <li><a href="heritage.php">Cultural Heritage</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h2>Hello, <?php echo $user['firstName'] . ' ' . $user['lastName']; ?>!</h2>
        <p>Welcome to your personal blog page. Use the navigation menu to explore different sections.</p>
    </div>
</body>
</html>


