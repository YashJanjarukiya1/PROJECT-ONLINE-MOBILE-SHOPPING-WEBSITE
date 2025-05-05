<?php
session_start();
include 'db.php';



// Fetch Admin Details (Modify based on your table structure)
$result = $conn->query("SELECT * FROM admin WHERE aid = '$aid'");
$admin = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.sidebar {
    width: 250px;
    background: #2c3e50;
    padding: 20px;
    height: 100vh;
    color: white;
    position: fixed;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
    margin: 10px 0;
    background: #34495e;
    border-radius: 5px;
    text-align: center;
}

.sidebar ul li a {
    text-decoration: none;
    color: white;
    display: block;
}

.sidebar ul li:hover {
    background: #1abc9c;
}

.main-content {
    margin-left: 150px;
    padding: 20px;
    width: calc(100% - 270px);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.profile-info {
    background: white;
    padding: 20px;
    border-radius: 10px;
    width: 50%;
    margin: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-info table {
    width: 100%;
    border-collapse: collapse;
}

.profile-info td {
    padding: 10px;
    text-align: left;
}

.profile-info .edit-btn {
    text-align: center;
    margin-top: 20px;
}

.profile-info .edit-btn a {
    text-decoration: none;
    background: #1abc9c;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
}

.profile-info .edit-btn a:hover {
    background: #16a085;
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
<body>

    

    <div class="main-content">
        <h1>Admin Profile</h1>
                 <a href="home.php" class="dashboard-btn">Back to Dashboard</a>

        <div class="profile-info">
            <table>
                <tr>
                    <td><strong>Admin ID:</strong></td>
                    <td><?php echo $admin['aid']; ?></td>
                </tr>
                <tr>
                    <td><strong>Password:</strong></td>
                    <td><?php echo $admin['password']; ?></td>
                </tr>
            </table>

            <div class="edit-btn">
                <a href="editprofile.php">Edit Profile</a>
            </div>
        </div>

    </div>

</body>
</html>
