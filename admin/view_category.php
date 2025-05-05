<?php
include 'db.php';
$result = $conn->query("SELECT * FROM category");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Categories</title>
    <link rel="stylesheet" href="styles.css">

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

        /* Heading */
        h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 26px;
        }

        /* Buttons */
        .add-btn, .back-btn {
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 15px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            background-color: #1abc9c;
            color: white;
        }

        .add-btn:hover, .back-btn:hover {
            background-color: #16a085;
        }

        /* Table Styling */
        table {
            width: 80%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2c3e50;
            color: white;
            text-transform: uppercase;
        }

        /* Action Buttons */
        .action-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .edit-btn, .delete-btn {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            color: white;
            transition: 0.3s;
            display: inline-block;
        }

        .edit-btn {
            background-color: #3498db;
        }

        .delete-btn {
            background-color: #e74c3c;
        }

        .edit-btn:hover {
            background-color: #2980b9;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }

        /* Dashboard Button */
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

<h2>Manage Categories</h2>
<a href="add_category.php" class="add-btn">➕ Add New Category</a>

<table>
    <tr>
        <th>Category Name</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['b_name']; ?></td>
            <td>
                <div class="action-container">
                    <a href="edit_category.php?b_name=<?php echo urlencode($row['b_name']); ?>" class="edit-btn">✏️ Edit</a>
                    <a href="delete_category.php?b_name=<?php echo urlencode($row['b_name']); ?>" class="delete-btn" onclick="return confirm('Delete this category?');">🗑️ Delete</a>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>

<a href="home.php" class="dashboard-btn">Back to Dashboard</a>

</body>
</html>

