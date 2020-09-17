<?php
session_start();
//error_reporting(0);


if(isset($_GET['x']))
{
     if (isset($_SESSION["id"]))
	{ 
	$sno=$_GET["x"];


        
       $id=$_SESSION["id"];
	   
	//$sno=$_GET['x'];
	//$id=$_SESSION["sno"];
	//echo $_SESSION['sno'];
	echo $id;

	include("admin/connect/db.php");
	$x="select * from gym where sno='$sno'";
$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
	$name=$c['category'];
	$image=$c['image'];
	$price=$c['price'];
}
	//echo $name.$image.$price;
$ins="insert into cart2(id,name,image,price)values('$id','$name','$image','$price')";
$y=mysqli_query($connect,$ins);
if($y)
{
	echo"<script>alert('successully added');
	
	window.location='index.php';</script>
	
	";
}
else
{
	echo"not".mysqli_error($connect);
}
}
}
?>