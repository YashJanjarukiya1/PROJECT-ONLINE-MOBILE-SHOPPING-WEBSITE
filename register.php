<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    try{
        $sql = "INSERT INTO users (username, password, mobile, gender) VALUES ('$username', '$password', '$mobile', '$gender')";

        if ($conn->query($sql) === TRUE) {
        #echo "Registration successful! <a href='index.php'>Login here</a>";
        $_SESSION['username'] = $username;
            header("Location: header.php");
        } 
    }catch(Exception $e){
        echo"
            <script type='text/javascript'>
            alert('user name invalid');
            </script>";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="hero">
        <div class="container">
            <h2>Register</h2>
            <hr><BR>
            <form action="" method="POST">
                <div class="input-container">
                    <input type="text" name="username" required/>
                    <label>USER_NAME</label>		
                </div>
                <div class="input-container">
                    <input type="text" name="password" required/>
                    <label>PASSWORD</label>		
                </div>
                <div class="input-container">
                    <input type="text" name="mobile" required/>
                    <label>MOBILE NO</label>		
                </div>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="index.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
