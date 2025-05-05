<?php
include 'db.php';
session_start();
$uid=$_SESSION['id'];
$f=time()+(5*24*60*60);
$date=date("m-d-Y",$f);
if(isset($_POST['done'])){
        $adds=$_POST['adds'];
        $py=$_POST['pyament'];
        if($py==true){
            $py=1;
        }else {
            $py=0;
        }
        $sql3="UPDATE `users` SET `address`='$adds' WHERE `id`='$uid'";
        $result=mysqli_query($conn,$sql3);
        $sql1="UPDATE `cart_mst` SET `oder_st`='1',`Delivery_date`='$date',`pyament`='$py' WHERE `id`='$uid' and `oder_st`='0'";
        echo"STARTING $conn->query($sql1)";
        $result1=mysqli_query($conn,$sql1);
        echo"$result1";
        if($conn->query($sql1) === TRUE) {
            echo"$uid";

            #$mass="<p>Add record...</p>";
            echo"
                <script type='text/javascript'>
                alert('oder conf...');
                window.location.href='header.php?q=2';
                </script>
            ";
        } 
    } 
?>
