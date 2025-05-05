<?php 
session_start();
include 'db.php';

$id = $_SESSION['id']; 

$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $mno = $row['mobile'];
    $gen = $row['gender'];
    $unm = $row['username'];
    // Don't show password; instead, use placeholder or empty field
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        .profile-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .profile-info {
            text-align: left;
        }
        .profile-info p {
            margin: 10px 0;
        }
        .profile-info input, .profile-info select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .edit-button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }
        .edit-button:hover {
            background-color: #0056b3;
        }
        .cen {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="cen">
    <div class="profile-container">
        <h2>Edit Profile</h2>
        <form action="update_profile.php" method="POST">
            <div class="profile-info">
                <p>
                    <label>ID</label>
                    <input type="text" name="id" value="<?php echo $id; ?>" readonly>
                </p>
                <p>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $unm; ?>">
                </p>
                <p>
                    <label>New Password</label>
                    <input type="password" name="password" placeholder="Enter new password">
                </p>
                <p>
                    <label>Mobile</label>
                    <input type="text" name="mobile" value="<?php echo $mno; ?>">
                </p>
                <p>
                    <label>Gender</label>
                    <select name="gender">
                        <option value="Male" <?php if($gen == 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if($gen == 'Female') echo 'selected'; ?>>Female</option>
                        <option value="Other" <?php if($gen == 'Other') echo 'selected'; ?>>Other</option>
                    </select>
                </p>
                <button class="edit-button" type="submit">Save Changes</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

