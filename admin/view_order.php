<?php
session_start();
include 'db.php';

// Fetch Orders
$order_result = $conn->query("SELECT cart_id, id, model_id, oder_st, delivery_date, pyament FROM cart_mst");
?>

<html>
<head>
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

h1, h2 {
    text-align: center;
    margin-bottom: 20px;
    
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #2c3e50;
    color: white;
}

th, td {
    padding: 15px;  /* Increase padding for more spacing */
    text-align: left;  /* Align text to left for better readability */
}

th {
    background-color: #2c3e50;
    color: white;
    font-size: 18px;  /* Slightly increase font size */
}

td {
    font-size: 16px;
    background: #ffffff;  /* Optional: Add a white background */
}

.main-content {
    margin-left: 150px;
    padding: 100px;
    padding-top:20px;
    width: calc(100% - 270px);
    display: flex;
    flex-direction: column;
    align-items: center; /* Centers content horizontally */
    justify-content: center; /* Centers content vertically */
    min-height: 100vh;
    margin-top:30px ;

}

table {
    width: 60%; /* Adjust width as needed */
    border-collapse: collapse;
    margin: auto; /* Centers the table */
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
      

        <!-- Orders Section -->
        <h2>Orders</h2>
        <a href="home.php" class="dashboard-btn">Back to Dashboard</a>
        <table border="1">
            <tr>
                <th>Cart ID</th>
                <th>User ID</th>
                <th>Model ID</th>
                <th>Order Status</th>
                <th>Delivery Date</th>
                <th>Payment</th>
            </tr>
            <?php while ($order = $order_result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $order['cart_id']; ?></td>
                    <td><?php echo $order['id']; ?></td>
                    <td><?php echo $order['model_id']; ?></td>
                    <td><?php echo $order['oder_st']; ?></td>
                    <td><?php echo $order['delivery_date']; ?></td>
                    <td><?php echo $order['pyament']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

    </div>


</body>
</html>
