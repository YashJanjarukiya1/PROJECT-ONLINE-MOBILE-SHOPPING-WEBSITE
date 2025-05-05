<?php
include 'db.php';
$dday=0;
$uid=$_SESSION['id'];
$todate=date("m-d-Y");
//$parts=explode("-",$todate);
?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
  </title>
  <style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1100px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        .product-image {
            flex: 0 0 100px;
            margin-right: 20px;
        }
        .product-image img {
            width: 100%;
            border-radius: 8px;
        }
        .product-details {
            flex: 1;
        }
        .product-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }
        .product-info {
            color: #666;
            margin: 0px 0px 5px 0px;
        }
        .product-price {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
        }
        .delivery-status {
            text-align: right;
        }
        .delivery-status .status {
            color: green;
            font-weight: bold;
        }
        .delivery-status .notst{
            color: red;
            font-weight: bold;
        }
        .delivery-status .date {
            font-size: 14px;
            color: #666;
        }
        .delivery-status .message {
            font-size: 12px;
            color: #666;
        }
        .rate-review {
            color: #007bff;
            font-size: 14px;
            text-decoration: none;
            display: flex;
            align-items: center;
            margin-top: 5px;
        }
        .rate-review i {
            margin-right: 5px;
        }
        .product-container-erro{
            display: flex;
            justify-content: center;
            background-color: #f6c9c9;
            padding: 20px;
            border: 1px solid #800;
            color: #900;
            font-family: 'Courier New', Courier, monospace;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1100px;
            width: 100%;
        }
  </style>
 </head>
 <body>
    <?php
    $sql="SELECT * FROM `cart_mst` WHERE `id`=$uid and `oder_st`=1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $mid=$row['model_id'];
            $cid=$row['cart_id'];
            $date=$row['Delivery_date'];
            $sql1="SELECT * FROM `mobile_mst` WHERE `model_id`='$mid'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
             $row = $result1->fetch_assoc();
                $mid=$row['model_id'];
                $img=$row['img'];
                $b_name=$row['b_name'];
                $model_name=$row['model_name'];
                $color=$row['color'];
                $rem=$row['rem'];
                $rom=$row['rom'];
                $price=$row['price'];
                $offer=$row['offer'];
                $dprice=$price-($price * ($offer / 100));
                echo"
        <div class='container'>
        <div class='product-image'>
            <img alt='Black jeans' height='150' src='phone/$img' width='100'/>
        </div>
        <div class='product-details'>
            <p class='product-title'>
            $b_name $model_name
            </p>
            <p class='product-info'>
            ($color,  $rem GB/$rom GB)
            </p>
            <p class='product-price'>
            ₹ $dprice
            </p>
        </div>
        <div class='delivery-status'>";
            
            if($todate>$date)
            {
                echo"<p class='status'>
            ● Delivered on $date</p>
            <p class='date'>
            Your item has been delivered
            </p>";
            }
            else{
                echo"<p class='notst'>
            ● Deliver on $date</p>
            <p class='date'>
            your delivery will be made in afew days.
            </p>";
            }
            echo"
            
            
        </div>
        </div>
        ";
            }
        }
    }
    else{
        echo"
        <div class='container'>
            <div class='product-container-erro'>
            Sorry,the selected product is currently unavailable.
            </div></div>
            ";
    }
    ?>
 </body>
</html>


