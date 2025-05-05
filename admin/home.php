<?php
session_start();
include 'db.php';

// Fetch counts from the database
$admin_count = $conn->query("SELECT COUNT(*) AS count FROM admin")->fetch_assoc()['count'];
$category_count = $conn->query("SELECT COUNT(*) AS count FROM category")->fetch_assoc()['count'];
$mobile_count = $conn->query("SELECT COUNT(*) AS count FROM mobile_mst")->fetch_assoc()['count'];
$order_count = $conn->query("SELECT COUNT(*) AS count FROM cart_mst")->fetch_assoc()['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
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
    margin-left: 270px;
    padding: 20px;
    width: 100%;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.dashboard-cards {
    display: flex;
    justify-content: space-around;
    margin-bottom: 30px;
}

.card {
    background: white;
    padding: 20px;
    width: 200px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.card img {
    width: 50px;
    margin-bottom: 10px;
}

.card h3 {
    margin: 10px 0;
    font-size: 18px;
    color: #333;
}

.card p {
    font-size: 20px;
    font-weight: bold;
    color: #1abc9c;
}

</style>

<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="home.php">Dashboard</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="mobiles.php">Mobiles</a></li>
            <li><a href="view_order.php">view_order</a></li>
            <li><a href="adminprofile.php">Profile</a></li>
            <li><a href="view_category.php">view_category</a></li>
            <li><a href="view_mobile.php">view_mobile</a></li>
            <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Admin Dashboard</h1>

        <!-- Dashboard Cards -->
        <div class="dashboard-cards">
            <div class="card">
                <img src="CSS/admin.png" alt="Admin Icon">
                <h3>Total Admins</h3>
                <p><?php echo $admin_count; ?></p>
            </div>

            <div class="card">
                <img src="CSS/category.png" alt="Category Icon">
                <h3>Total Categories</h3>
                <p><?php echo $category_count; ?></p>
            </div>

            <div class="card">
                <img src="CSS/mobile.png" alt="Mobile Icon">
                <h3>Total Mobiles</h3>
                <p><?php echo $mobile_count; ?></p>
            </div>

            <div class="card">
                <img src="CSS/order.png" alt="Order Icon">
                <h3>Total Orders</h3>
                <p><?php echo $order_count; ?></p>
            </div>
        </div>

</body>
</html>

