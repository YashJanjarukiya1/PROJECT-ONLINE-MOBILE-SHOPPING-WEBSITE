<?php
$conn=mysqli_connect("localhost","yash","Root@123");

if(!$conn)
{
	die("connection not found!");
}

else
{
      

      
      mysqli_select_db($conn,"user_system");
}

?>

      
