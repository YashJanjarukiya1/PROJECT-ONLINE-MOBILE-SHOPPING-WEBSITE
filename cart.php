<?php
include 'db.php';
$uid=$_SESSION['id'];
$tot=0;
$disc=0;
$off=0;
$nd=0;
$adds=0;
if(isset($_POST['oder'])){
    $add=0;
    $ids=$_SESSION['id'];
    $sql2="SELECT * FROM users WHERE id='$ids'";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        $add=$row2['address'];
    }
    ?>

    <style>
        .container{
            display: none;
        }
        body{
            overflow: hidden;
        }	
    </style>
    <div class="odcon">
        <div class="addbox">
            <h2>Orders details</h2>
            <br>
            <br>
            <form method="post" action="oder.php">
                <div class="input-container">
                    <input type="text" name="adds" required="" value="<?php echo $add;?>" />
                    <label>address</label>		
                </div>
                <div class="checkbox-wrapper-13">
                    <input id="c1-13" type="checkbox" name="pyament">
                    <label for="c1-13">Check for online pyaments </label>
                </div>
                <br>
                <input type="submit" value="Done" name="done" class="button-74" role="button">
            </form>
        </div>
    </div>
    <?php 
    
   }
   ?>
<html>
 <head>
  <title>
  </title>
  <link rel="stylesheet" href="CSS/odr.css">
  <style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .footer {
            border-top: 1px solid #ddd;
            border-bottom: none;
        }
        .header h2, .footer h2 {
            margin: 0;
            font-size: 18px;
        }
        .header button, .footer button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .product-details, .insurance-details, .price-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }
        .product-details img, .insurance-details img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }
        .product-info, .insurance-info {
            flex: 1;
            margin-left: 20px;
        }
        .product-info h3, .insurance-info h3 {
            margin: 0;
            font-size: 16px;
        }
        .product-info p, .insurance-info p {
            margin: 5px 0;
            color: #555;
        }
        .price-details {
            flex-direction: column;
            align-items: flex-end;
        }
        .price-details p {
            margin: 5px 0;
            font-size: 16px;
        }
        .price-details p span {
            font-weight: bold;
        }
        .total-amount {
            font-size: 20px;
            color: #28a745;
        }
        .place-order {
            text-align: center;
            padding: 20px 0;
        }
        .place-order .button {
            background-color: #ff5722;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        .secure-payments {
            display: flex;
            align-items: center;
            padding: 10px 0;
        }
        .secure-payments i {
            color: #28a745;
            margin-right: 10px;
        }
        .crt a{
            margin-left: 88%;
            color:white;
            font-size: 1.2rem;
            border-radius: 10px;
            text-decoration: none;
            height: 30px;
            padding: 10px 30px 10px 30px;
            background-color:rgb(221, 50, 8);
        }
  </style>
 </head>
 <body>
  <div class="container">
   <?php
   if(isset($_GET['did']))
   {
       $cid= $_GET['did'];
       $result=mysqli_query($conn,"DELETE FROM `cart_mst` WHERE `cart_id`='$cid'")or die('<h3> Failed to delete record.</h3>');
            echo"
            <script type='text/javascript'>
            alert('deleted succesfully.');
            window.location.href='header.php?q=1';
            </script>";
   }
   else{
       $uid=$_SESSION['id'];
       $no=0;
       $disc=0;
       $off=0;
       $nd=0; 
   
   $sql="SELECT * FROM `cart_mst` WHERE `id`=$uid and oder_st=0";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $mid=$row['model_id'];
           $cid=$row['cart_id'];
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
               $display_size=$row['display_size'];
               $back_camera=$row['back_camera'];
               $front_camera=$row['front_camera'];
               $battery=$row['battery'];
               $processor=$row['processor'];
               $warranty=$row['warranty'];
               $price=$row['price'];
               $offer=$row['offer'];
               $dprice=$price-($price * ($offer / 100));
               $tot+=$dprice;
               $disc+=$price;
               $off+=$price-$dprice;
               $f=time()+(5*24*60*60);
               $nd++;
               echo"
               <div class='product-details'>
       <img height='100' src='phone/$img' width='100'/>
       <div class='product-info'>
        <h3>
          $b_name $model_name( $color,  $rem GB/$rom GB)
        </h3>
        <p>
         <span style='text-decoration: line-through;'>
          ₹ $price 
         </span>
         <span style='color: #ff5722;'>
          ₹ $dprice 
         </span>
         <span style='color: #28a745;'>
        $offer% Off
         </span>
        </p>
        <p>
         Delivery by ";echo date("D M d Y",$f);echo" |
         <span style='color: #28a745;'>
          Free
         </span>
        </p>
        <div class='crt'><a href='cart.php?did=$cid'>delete</a></div>
       </div>
      </div>
               ";
           }
       }
   }
   else{
    echo"<div class='erro'>Your cart is empty!</div>";
    echo"
    <style>
        .place-order{
            display: none;
        }
    </style>";
   }
   ?>
   <form method="post">
   <div class="price-details">
    <p>
     Price (<?php echo $nd; ?> item):
     <span>
      <?php echo "₹ $disc" ?>
     </span>
    </p>
    <p>
     Discount:
     <span style="color: #ff5722;">
      <?php echo "– ₹ $off" ?> 
     </span>
    </p>
    <p>
     Delivery Charges:
     <span style="color: #28a745;">
      Free
     </span>
    </p>
    <p class="total-amount">
     <?php echo "Total Amount: ₹ $tot" ?>
    </p>
    <p style="color: #28a745;">
     <?php echo "You will save ₹$off on this order" ?>
    </p>
   </div>
   <div class="place-order">
    <input type="submit" name="oder" value="PLACE ORDER" class="button">
   </div>
   <div class="footer">
    <div class="secure-payments">
     <i class="fas fa-check-circle">
     </i>
     <p>
      <img src="CSS/shield.png" height="20">Safe and Secure Payments. Easy returns. 100% Authentic products.
     </p>
    </div>
   </div>
  </div>
  </form>
  <?php
   }?>
 </body>
</html>

