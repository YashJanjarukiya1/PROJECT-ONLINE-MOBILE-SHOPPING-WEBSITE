<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("Location: header.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="hero">
    <div class="container">
        <h2>Login</h2>
        <hr><br>
        <form action="" method="POST">
            <!--<input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>-->
            <div class="input-container">
                <input type="text" name="username" required/>
                <label>USER_NAME</label>		
            </div>
            <div class="input-container">
                <input type="text" name="password" required/>
                <label>PASSWOED</label>		
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
        
    </div>
    </div>
</body>
</html>
