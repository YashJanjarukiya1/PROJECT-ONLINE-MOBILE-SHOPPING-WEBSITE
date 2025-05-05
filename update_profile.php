<?php
session_start();
include 'db.php';

$id = $_POST['id'];
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$password = $_POST['password'];

// If new password is entered, hash it
if (!empty($password)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET username='$username', mobile='$mobile', gender='$gender', password='$hashed_password' WHERE id='$id'";
} else {
    $sql = "UPDATE users SET username='$username', mobile='$mobile', gender='$gender' WHERE id='$id'";
}

if ($conn->query($sql) === TRUE) {
    echo "Profile updated successfully!";
    // You can redirect if needed:
    // header("Location: profile.php");
} else {
    echo "Error updating profile: " . $conn->error;
}
?>
