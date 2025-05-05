
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="hero">
        <div class="container">
            <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
            <p>You are now logged in.</p>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
