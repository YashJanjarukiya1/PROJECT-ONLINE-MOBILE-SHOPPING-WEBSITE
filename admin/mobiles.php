<?php
session_start();
include 'db.php';

// Fetch Mobiles
$mobile_result = $conn->query("SELECT * from mobile_mst");

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
	 	<h2>Mobiles</h2>
	 	
	 	<a href="home.php" class="dashboard-btn">Back to Dashboard</a>
	 	
        <table border="1">
            <tr>
                <th>ModelID</th>
                <th>BrandName</th>
                <th>ModelName</th>
                <th>ModelColor</th>
                <th>RAM</th>
                <th>ROM</th>
                <th>DISPLAY</th>
                <th>BackCameras</th>
                <th>FrontCameras</th>
                <th>Battery</th>
                <th>Processor</th>
                <th>Warranty</th>
                <th>Price</th>
                <th>Offer</th>
                <th>Ratings</th>
                
            </tr>
            <?php while ($row = $mobile_result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['model_id']; ?></td>
                    <td><?php echo $row['b_name']; ?></td>
                    <td><?php echo $row['model_name']; ?></td>
                    <td><?php echo $row['color']; ?></td>
                    <td><?php echo $row['rem']; ?></td>
                    <td><?php echo $row['rom']; ?></td>
                    <td><?php echo $row['display_size']; ?></td>
                    <td><?php echo $row['back_camera']; ?></td>
                    <td><?php echo $row['front_camera']; ?></td>
                    <td><?php echo $row['battery']; ?></td>
                    <td><?php echo $row['processor']; ?></td>
                    <td><?php echo $row['warranty']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['offer']; ?></td>
                    <td><?php echo $row['ratings']; ?></td>
                    
                </tr>
            <?php endwhile; ?>
        </table>

    </div>
    
    

</body>
</html>
