<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
if(isset($_POST['submit']))
{
   
    $srh=$_POST['search'];
    $_SESSION['company'] = $srh;
    header('location: header.php?q=4');
}
?>

<html>
 <head>
    <link rel="stylesheet" href="CSS/home.css">
  <title>
  Mobile World
  </title>
  <style>
   body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            position: fixed;
            width: 98%;
            opacity: 100%;
            align-items: center;
            padding: 10px 40px 10px 20px;
            background-color: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        .header .logo {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        .header .logo a {
            text-decoration: none;
        }
        .header .logo span {
            font-size: 12px;
            color: #878787;
        }
        .header .logo span .plus {
            color: #f7b500;
        }
        .header .search-bar {
            flex-grow: 1;
            display: flex;
            align-items: center;
            background-color: #f1f3f6;
            border-radius: 2px;
            padding: 5px 10px;
        }
        .header .search-bar input {
            border: none;
            outline: none;
            background: none;
            flex-grow: 1;
            padding: 5px;
            font-size: 14px;
        }
        .header .search-bar i {
            color: #878787;
        }
        .header .search-bar .find{
            background-color: transparent;
            border-color: transparent;
        }
        .header .nav-links {
            display: flex;
            align-items: center;
        }
        .header .nav-links a {
            margin-left: 20px;
            font-size: 14px;
            color: #000;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .header .nav-links a i {
            margin-right: 5px;
        }
        .header .nav-links .icon{
            margin-right: 5px;
            height:20px;
        }
  </style>
 </head>
 <body>
 <form action="#" method="post">
  <div class="header">
   <div class="logo">
    <a href="header.php?q=0">
    <!--<img alt="logo" height="20" src="" width="20"/>-->
    <div>
     <strong style="color: #2874f0;">Mobile</strong>
     <span>World <span class="plus">Plus<sup>+</sup></span></span>
    </div>
    </a>
   </div>
   
   <div class="search-bar">
    <input placeholder="Search for Products, Brands and More" type="search" name="search"/>
    <button type="submit" class="find" name="submit"><img src="CSS/search.png" height="20px"></button>
   </div>
   </form>
   <div class="nav-links">
    <a href="header.php?q=1">
    <img src="CSS/cart.png" class="icon">
     Cart
    </a>
    <a href="header.php?q=2">
    <img src="CSS/booking.png"  class="icon">
    </img>
     Orders
    </a>
    <a href="header.php?q=3" title="profile">
     <img src="CSS/account.png"  class="icon">
     </img>
     Hello, <?php echo $_SESSION['username']; ?>
    </a>
    <a href="logout.php" title="logout"><img src="CSS/logout.png" height="35px";></a>
   </div>
  </div>
  <div class="hero">
  <?php
            if(@$_GET['q']==0)
            {
                include_once 'home.php';
                #include_once 'home1.php';
            }
            elseif(@$_GET['q']==1)
            {
                include_once 'cart.php';
            }
            elseif(@$_GET['q']==2)
            {
                include_once 'orders.php';
            }
            elseif(@$_GET['q']==3)
            {
                echo"<h2>profile</h2>";
                include_once 'profile.php';
            }
            elseif(@$_GET['q']==4)
            {
                include_once 'list.php';
            }
    ?>
  </div>
 </body>
</html>

