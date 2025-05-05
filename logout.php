<?php
session_start();
include 'db.php'; // optional

// Destroy the session
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged Out</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logout-box {
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .logout-box h2 {
            color: #333;
            margin-bottom: 25px;
        }

        .logout-button {
            padding: 12px 25px;
            font-size: 16px;
            background-color: #dc3545;
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        .success-message {
            display: none;
        }
    </style>
</head>
<body>

    <div class="logout-box" id="logoutBox">
        <h2>Are you sure you want to logout?</h2>
        <a href="index.php">
        <button class="logout-button" onclick="confirmLogout()">Logout</button>
    </div>



    <script>
        function confirmLogout() {
            if (confirm("Do you really want to logout?")) {
                // Hide confirmation box
                document.getElementById('logoutBox').style.display = 'none';
                // Show success message
                document.getElementById('successMessage').style.display = 'block';
            }
        }
    </script>
    
</body>
</html>

