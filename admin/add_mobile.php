<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $b_name = $_POST['b_name'];
    $model_name = $_POST['model_name'];
    $color = $_POST['color'];
    $rem = $_POST['rem'];
    $rom = $_POST['rom'];
    $display_size = $_POST['display_size'];
    $back_camera = $_POST['back_camera'];
    $front_camera = $_POST['front_camera'];
    $battery = $_POST['battery'];
    $processor = $_POST['processor'];
    $warranty = $_POST['warranty'];
    $price = $_POST['price'];
    $offer = $_POST['offer'];
    $ratings = $_POST['ratings'];

    $query = "INSERT INTO mobile_mst (b_name, model_name, color, rem, rom, display_size, back_camera, front_camera, battery, processor, warranty, price, offer, ratings)
              VALUES ('$b_name', '$model_name', '$color', '$rem', '$rom', '$display_size', '$back_camera', '$front_camera', '$battery', '$processor', '$warranty', '$price', '$offer', '$ratings')";

    if ($conn->query($query) === TRUE) {
        header("Location: view_mobile.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
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

/* Heading */
h2 {
    color: #333;
    margin-bottom: 20px;
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
}

/* Input Fields */
input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 14px;
}

/* Submit Button */
button {
    padding: 10px;
    background-color: #1abc9c;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background-color: #16a085;
}

/* Top Center Button */
.mobile-button-container {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    margin-bottom: 20px;
}

.mobile-button {
    padding: 10px 15px;
    background-color: #1abc9c;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
}

.mobile-button:hover {
    background-color: #16a085;
}

.dashboard-btn{
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

    </style>
</head>
<body>
    <h2>Add New Mobile</h2>
    
    <form method="POST" action="">
        <input type="text" name="b_name" placeholder="Brand Name" required><br>
        <input type="text" name="model_name" placeholder="Model Name" required><br>
        <input type="text" name="color" placeholder="Color" required><br>
        <input type="text" name="rem" placeholder="RAM" required><br>
        <input type="text" name="rom" placeholder="ROM" required><br>
        <input type="text" name="display_size" placeholder="Display Size" required><br>
        <input type="text" name="back_camera" placeholder="Back Camera" required><br>
        <input type="text" name="front_camera" placeholder="Front Camera" required><br>
        <input type="text" name="battery" placeholder="Battery" required><br>
        <input type="text" name="processor" placeholder="Processor" required><br>
        <input type="text" name="warranty" placeholder="Warranty" required><br>
        <input type="text" name="price" placeholder="Price" required><br>
        <input type="text" name="offer" placeholder="Offer"><br>
        <input type="text" name="ratings" placeholder="Ratings"><br>
        <button type="submit">Add Mobile</button>
    </form>
    <a href="home.php" class="dashboard-btn">Back to Dashboard</a>
</body>
</html>
