<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $b_name = $conn->real_escape_string($_POST['b_name']);

    $sql = "INSERT INTO category (b_name,img) VALUES ('$b_name','')";
    if ($conn->query($sql)) {
    echo 'if';
        header("Location: view_category.php");
        exit();
    } else {
    echo 'else';
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
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
}

button:hover {
    background-color: #16a085;
}

/* Dashboard & Back to Categories Buttons */
/* Centering the Dashboard & Back to Categories Buttons */
.button-container {
    position: fixed;
    bottom: 20px;
    margin-bottom:500px;
    left: 50%;
    transform: translateX(-50%); /* Centers the buttons */
    display: flex;
    gap: 10px;
}


.dashboard-btn, .back-btn {
    padding: 10px 15px;
    background-color: #1abc9c;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s ease-in-out;
}

.dashboard-btn:hover, .back-btn:hover {
    background-color: #16a085;
}



    </style>

</head>
<body>
<h2>Add New Category</h2>

<!-- Form for adding categories -->
<form method="post">
    <label for="b_name">Category Name:</label>
    <input type="text" name="b_name" id="b_name" required>
    <button type="submit">Add</button>
</form>

<!-- Back to Dashboard & Back to Categories buttons in a container -->
<div class="button-container">
    <a href="home.php" class="dashboard-btn">Back to Dashboard</a>
    <a href="view_category.php" class="back-btn">Back to Categories</a>
</div>

</body>
</html>
