<?php
include 'db.php';
if(isset($_GET['mid']))
{
    session_start();
    $uname=$_SESSION['username'];
    $sql1="SELECT `id` FROM `users` WHERE `username`='$uname'";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $ssid=$row1['id'];
        echo $ssid;
    }
    $mid=$_GET['mid'];
    $todate=date("m-d-Y");
    $sql3 = "INSERT INTO `cart_mst`(`id`, `model_id`, `oder_st`, `Delivery_date`, `pyament`) VALUES ('$ssid','$mid','0','$todate','12')";
    if($conn->query($sql3) === TRUE) {
        echo"
        <script type='text/javascript'>
        alert('add.');
        window.location.href='header.php?q=1';
        </script>";
    }
    
}
if (isset($_SESSION['company'])) {
    $b=$_SESSION['company'];
    $sql = "SELECT * FROM `mobile_mst` WHERE `b_name`='$b'  OR `model_name`='$b' OR `rom`='$b' OR `rem`='$b' OR `price`='$b'";
    $result = $conn->query($sql); 
}
if(isset($_GET['com']))
{
    $com=$_GET['com'];
    $sql = "SELECT * FROM `mobile_mst` WHERE `b_name`='$com'";
    $result = $conn->query($sql);
}
/*else{
    $sql = "SELECT * FROM `mobile_mst`";
    $result = $conn->query($sql);
}*/
/*if(isset($_GET['mid']))
{
    echo $ssid;
    /*try{
    $mid=$_GET['mid'];
    $sql3 = "INSERT INTO `cart_mst`(`id`, `model_id`, `oder_st`, `Delivery_date`) VALUES ('$id','$mid','0','0')";
    if($conn->query($sql3) === TRUE) {
        echo"
        <script type='text/javascript'>
        alert('Student attendance is saved in database.');
        window.location.href='header.php';
        </script>";
    }
    }
    catch(Exception $e)
    {
        echo $e;
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/list.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
<div class="container">
    <?php
                
        // Check if there are any records
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $mid=$row['model_id'];
                $img=$row['img'];
                $b_name=$row['b_name'];
                $model_name=$row['model_name'];
                $color=$row['color'];
                $rem=$row['rem'];
                $rom=$row['rom'];
                $display_size=$row['display_size'];
                $back_camera=$row['back_camera'];
                $front_camera=$row['front_camera'];
                $battery=$row['battery'];
                $processor=$row['processor'];
                $warranty=$row['warranty'];
                $price=$row['price'];
                $offer=$row['offer'];
                // count the some size and offer
                $dprice=$price-($price * ($offer / 100));
                /*$inch=number_format($display_size/2.54,2);*/
                echo"
                <div class='product-container'>
            <div class='product-image'>
                <img height='300' src='phone/$img' width='200'/>
            </div>
            <div class='product-details'>
                <div class='product-title'>
                $b_name $model_name ($color, $rem GB/$rom GB)
                </div>
                <div class='product-rating'>
                <i class='fas fa-star'>
                </i>
                4.5 Ratings
                </div>
                <div class='product-specs'>
                <ul>
                <li>
                $rem GB RAM | $rom GB ROM
                </li>
                <li>
                $display_size 
                </li>
                <li>
                $back_camera | $front_camera MP Front Camera
                </li>
                <li>
                $battery mAh Battery
                </li>
                <li>
                $processor Processor
                </li>
                <li>
                $warranty and 6 Months Warranty on Accessories
                </li>
                </ul>
                </div>
            </div>
            <div class='price'><div class='product-price'>
                ₹ $dprice
                </div>
                <div>
                <span class='product-discount'>
                ₹$price
                </span>
                <span class='product-discount-rate'>
                $offer% off
                </span>
                </div>
                <div class='product-delivery'>
                Free delivery
                </div>
                <div class='product-offer'>
                Lowest price guaranteed
                </div>
                <div class='crt'><a href='list.php?mid=$mid'>Add To Cart</a></div>
                </div></div>
                ";
            }    
        }
        else{
            echo"
            <div class='product-container-erro'>
            Sorry,the selected product is currently unavailable.
            </div>
            ";
        }
    ?>
    <!--<div class="product-container">
    <div class="product-image">
        <img height="300" src="phone/t3.png" width="150"/>
    </div>
    <div class="product-details">
        <div class="product-title">
        vivo T3 Ultra (Lunar Gray, 256 GB)
        </div>
        <div class="product-rating">
        <i class="fas fa-star">
        </i>
        4.5 | 5,184 Ratings &amp; 436 Reviews
        </div>
        <div class="product-specs">
        <ul>
        <li>
        12 GB RAM | 256 GB ROM
        </li>
        <li>
        17.22 cm (6.78 inch) Display
        </li>
        <li>
        50MP + 8MP | 50MP Front Camera
        </li>
        <li>
        5500 mAh Battery
        </li>
        <li>
        Dimensity 9200+ Processor
        </li>
        <li>
        1 Year Warranty on Handset and 6 Months Warranty on Accessories
        </li>
        </ul>
        </div>
    </div>
    <div class="price"><div class="product-price">
        ₹33,999
        </div>
        <div>
        <span class="product-discount">
        ₹39,999
        </span>
        <span class="product-discount-rate">
        15% off
        </span>
        </div>
        <div class="product-delivery">
        Free delivery
        </div>
        <div class="product-offer">
        Lowest price since launch
        </div>
        <div class="product-exchange">
        Upto ₹20,600 Off on Exchange
        </div>
    </div></div>-->
    </div>
    </form>
</body>
</html>

