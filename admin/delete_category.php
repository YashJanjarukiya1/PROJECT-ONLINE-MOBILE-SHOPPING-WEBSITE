<?php
include 'db.php';

if (isset($_GET['b_name'])) {
    $b_name = $conn->real_escape_string($_GET['b_name']);

    $sql = "DELETE FROM category WHERE b_name='$b_name'";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_category.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request!";
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
.edit-btn {
    background-color: #3498db;
    color: white;
}

.delete-btn {
    background-color: #e74c3c;
    color: white;
}

.edit-btn:hover {
    background-color: #2980b9;
}

.delete-btn:hover {
    background-color: #c0392b;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    table {
        width: 95%;
    }
}




    </style>

</head>

</html>