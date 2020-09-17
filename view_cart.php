<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</head>
<?php
session_start();
$sum=0;
	include("admin/connect/db.php");
include("header.php");

if(!isset($_SESSION['id']))
{
	//header("location:index.php");
	echo"<script>
	alert('login first');
	window.location='gyms.php';
	</script>";
	
	
}
else
{
	if(isset($_SESSION['id']))
	{
		
  	$id=$_SESSION["id"];
	
	
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<style>
#i1
{
	font-size:20px;
	color:red;
	
}

#t1{
color:green;

text-transform:capitalize;
font-family: GreatVibes-Regular;
font-family: inherit;
}
</style>
</head>
<body>
<br><br>

<div class="container">
<span id="i1"><strong>    View cart</strong></span><br>
<table class="table table-striped" >
<?php
		
		$sql="select * from cart2 where id='$id'";
		
		$a=mysqli_query($connect,$sql);
		

echo "<tr>";
echo "<th>Sno</th>";
echo "<th>Name</th>";
echo "<th>Image</th>";
echo "<th>Price</th>";
echo "<th>Remove</th>";
echo "</tr>";
		if(mysqli_num_rows($a)>0)
		{
			while($r=mysqli_fetch_array($a))
	
			{
	echo "<tr class='table_row'>";
echo "<td id='t1'><strong>".$r[0]."</strong></td>";
echo "<td id='t1'><strong>".$r[2]."</strong></td>";
?>

<td><img src="<?php echo'gym_images/'.$r[3];?>" alt="<?php echo'admin/upload/'.$r[3]?>" height="100px" width="100px"/></td>

<?php
echo "<td id='t1'><strong>".$r[4]."</strong></td>";
echo "<td id='t1'><strong><a href=delete_cart.php?x=$r[0]><span class='glyphicon glyphicon-remove'></span></a></strong></td>";
	
			}
		
	
echo"</tr>";
		
		}?>
		</table>
		</div>
		<?php
$x="select * from cart2 where id='$id'";
	$y=mysqli_query($connect,$x);

	while($c=mysqli_fetch_array($y))
	{
		$total=$c['price'];
		
		$sum+=$total;
	
	}
	echo "<span style='font-size:2em;font-family: GreatVibes-Regular;padding-left:50%'>Total Price:".$sum."</span>";
	
	$up="update cart2 set total_price='$sum'";
	$qu=mysqli_query($connect,$up);
	
		?>

				
<a href="pay.php" style="font-size:2em;color:#f067ae;font-family: GreatVibes-Regular;padding-left:80%">Pay Now</a>
<?php

}
}

//include("footer.php");

?>