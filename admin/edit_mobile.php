<?php
include 'db.php';

$model_id = $_GET['model_id'];
$mobile = $conn->query("SELECT * FROM mobile_mst WHERE model_id = $model_id")->fetch_assoc();

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

    $query = "UPDATE mobile_mst SET 
              b_name='$b_name', model_name='$model_name', color='$color', rem='$rem', rom='$rom', display_size='$display_size', 
              back_camera='$back_camera', front_camera='$front_camera', battery='$battery', processor='$processor', 
              warranty='$warranty', price='$price', offer='$offer', ratings='$ratings' 
              WHERE model_id = $model_id";

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
    <h2>Edit Mobile</h2>
    
    <form method="POST" action="">
    
        <input type="text" name="b_name" value="<?php echo $mobile['b_name']; ?>" required><br>
        <input type="text" name="model_name" value="<?php echo $mobile['model_name']; ?>" required><br>
        <input type="text" name="color" value="<?php echo $mobile['color']; ?>" required><br>
        <input type="text" name="rem" value="<?php echo $mobile['rem']; ?>" required><br>
        <input type="text" name="rom" value="<?php echo $mobile['rom']; ?>" required><br>
        <input type="text" name="display_size" value="<?php echo $mobile['display_size']; ?>" required><br>
        <input type="text" name="back_camera" value="<?php echo $mobile['back_camera']; ?>" required><br>
        <input type="text" name="front_camera" value="<?php echo $mobile['front_camera']; ?>" required><br>
        <input type="text" name="battery" value="<?php echo $mobile['battery']; ?>" required><br>
        <input type="text" name="processor" value="<?php echo $mobile['processor']; ?>" required><br>
        <input type="text" name="warranty" value="<?php echo $mobile['warranty']; ?>" required><br>
        <input type="text" name="price" value="<?php echo $mobile['price']; ?>" required><br>
        <input type="text" name="offer" value="<?php echo $mobile['offer']; ?>" required><br>
        <input type="text" name="ratings" value="<?php echo $mobile['ratings']; ?>" required><br>
        
        <!-- Add all input fields similarly -->
        <button type="submit">Update Mobile</button>
    </form>
    <a href="home.php" class="dashboard-btn">Back to Dashboard</a>
</body>
</html>
