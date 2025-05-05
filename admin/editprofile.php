<?php
session_start();
include 'db.php';


// Fetch admin details
$result = $conn->query("SELECT * FROM admin WHERE aid = '$aid'");
$admin = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    // Update password in the database
    $update_query = "UPDATE admin SET password='$new_password' WHERE aid='$aid'";
    if ($conn->query($update_query)) {
        echo "<script>alert('Profile Updated Successfully!'); window.location.href='adminprofile.php';</script>";
    } else {
        echo "Error updating profile: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Admin Profile</title>
    <link rel="stylesheet" href="styles.css">

    <style>

        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.main-content {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
    margin-bottom: 500px;
}

h1 {
    margin-bottom: 20px;
    font-size: 22px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 14px;
    margin-bottom: 5px;
    text-align: left;
}

input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 14px;
    width: 100%;
}

button {
    padding: 10px;
    background-color: #1abc9c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s ease;
}

button:hover {
    background-color: #16a085;
}
.dashboard-btn {
    position: fixed;
    bottom: 20px;
    left: 20px;
    padding: 10px 15px;
    background-color: #1abc9c;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
}

.dashboard-btn:hover {
    background-color: #16a085;
}


    </style>
</head>
<body>

    <div class="main-content">
        <h1>Edit Profile</h1>
        <a href="home.php" class="dashboard-btn">Back to Dashboard</a>

        <form method="POST">
            <label for="password">New Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Update</button>
        </form>
    </div>

</body>
</html>
