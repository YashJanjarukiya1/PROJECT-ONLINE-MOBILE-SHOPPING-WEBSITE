<?php
session_start();
include 'db.php';

// Handle Delete Request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $conn->query("DELETE FROM mobile_mst WHERE model_id = $delete_id");
    header("Location: view_mobile.php"); // Refresh the page after deletion
    exit();
}

// Fetch Mobiles
$mobile_result = $conn->query("SELECT * FROM mobile_mst");
?>

<html>
<head>
    
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .main-content h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 26px;
            text-align: center;
        }

        /* Button Styles */
        .dashboard-btn, .action-btn {
            padding: 10px 15px;
            background-color: #1abc9c;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            margin: 10px 0;
        }

        .dashboard-btn:hover, .action-btn:hover {
            background-color: #16a085;
        }

        .dashboard-btn {
            margin-left: 600px;
        }

        /* Back to Dashboard Button - Positioned Bottom Left */
        .back-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            padding: 10px 15px;
            background-color: #1abc9c;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        /* Table Styling */
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 1000px;
            margin-top: 20px;
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
            font-size: 14px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #1abc9c;
            color: white;
        }

        /* Action Button Container */
        .action-container {
            display: flex;
            justify-content: center;
            gap: 5px;
        }
    </style>
</head>

<body>
    <div class="main-content">
        <h2>Mobiles</h2>
        <a href="add_mobile.php" class="dashboard-btn">➕ Add New Mobile</a>

        <table>
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
                <th>Actions</th>
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
                    <td>
                        <div class="action-container">
                            <a href="edit_mobile.php?model_id=<?php echo $row['model_id']; ?>" class="action-btn">Edit</a>
                            <a href="?delete_id=<?php echo $row['model_id']; ?>" class="action-btn" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <a href="home.php" class="back-btn">Back to Dashboard</a>
</body>
</html>

