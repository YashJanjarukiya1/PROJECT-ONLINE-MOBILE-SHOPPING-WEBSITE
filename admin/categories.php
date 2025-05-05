<?php
session_start();
include 'db.php';

// Fetch Categories
$category_result = $conn->query("SELECT * FROM category");


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
       

        <!-- Categories Section -->
        <h2>Categories</h2>
         <a href="home.php" class="dashboard-btn">Back to Dashboard</a>
        
        <table border="1">
            <tr>
                
                <th>BrandName</th>
                
            </tr>
            <?php while ($row = $category_result->fetch_assoc()) : ?>
                <tr>

                    <td><?php echo $row['b_name']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

    </div>


</body>
</html>
