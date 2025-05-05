<?php
include 'db.php';

if (isset($_GET['b_name'])) {
    $b_name = $conn->real_escape_string($_GET['b_name']);

    $result = $conn->query("SELECT * FROM category WHERE b_name = '$b_name'");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Category not found!";
        exit();
    }
} else {
    echo "Invalid Request!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_b_name = $conn->real_escape_string($_POST['b_name']);

    $conn->query("UPDATE category SET b_name = '$new_b_name' WHERE b_name = '$b_name' AND img = ''");


    header("Location: view_category.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
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

        /* Form Styling */
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            text-align: left;
            width: 100%;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        /* Submit Button */
        button {
            padding: 10px 15px;
            background-color: #1abc9c;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            width: 100%;
            margin-top: 10px;
        }

        button:hover {
            background-color: #16a085;
        }

        /* Button Container for Navigation Buttons */
        .button-container {
            display: flex;
            justify-content: flex-start; /* Aligns buttons to the left */
            gap: 20px; /* Adds space between the buttons */
            margin-top: 20px;
            }


        /* Back to Dashboard & Back to Categories Buttons */
        .dashboard-btn, .back-btn {
            padding: 10px 15px;
            background-color: #1abc9c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: 0.3s ease-in-out;
            text-align: center;
            
        }

        .dashboard-btn:hover, .back-btn:hover {
            background-color: #16a085;
        }
    </style>
</head>
<body>
<h2>Edit Category</h2>

<form method="POST">
    <label for="b_name">Category Name:</label>
    <input type="text" name="b_name" id="b_name" value="<?php echo htmlspecialchars($row['b_name']); ?>" required>
    <button type="submit">Update</button>
</form>

<!-- Button Container for Navigation Links -->
<div class="button-container">
    <a href="home.php" class="dashboard-btn">Back to Dashboard</a>
    <a href="view_category.php" class="back-btn">Back to Categories</a>
</div>

</body>
</html>



