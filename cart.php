<?php
include("admin/connect/db.php");
session_start();
$item=$_GET['it'];

$price=$_GET['price'];
$mail=$_SESSION['email'];
$time=$_SESSION['time'];
$total=1*$price;

$x="Insert into cart(item,price,username,username_time,total) values('$item','$price','$username','$time','$total')"; 
$y=mysqli_query($connect,$x);
if($y)
{
header("location:payment_gym.php?price=$price");
}
else
{
echo"not";
}
?>