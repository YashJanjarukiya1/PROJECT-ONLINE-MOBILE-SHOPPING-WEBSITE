<?php

session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['aid'];
    $password = $_POST['password'];
    
     header("Location: home.php"); 
     exit();

    // Check if user exists
    $stmt = $conn->prepare("SELECT password FROM admin WHERE aid = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        
        // Verify password
        if (password_verify($password, $password)) {
            $_SESSION['aid'] = $username;
            header("Location: home.php"); // Redirect to admin home page
            exit();
        } else {
            $_SESSION['error'] = "Invalid password!";
        }
    } else {
        $_SESSION['error'] = "User not found!";
    }

    $stmt->close();
    $conn->close();

    header("Location: index.php"); // Redirect back to login page if error
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Admin Login</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="aid" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <style>

     * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-image: url("photo.jpeg");
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 300px;
}

.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}


    </style>

</body>
</html>
