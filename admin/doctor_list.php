<?php
include("admin/connect/db.php");
if(isset($_GET['name']))
{
$doctor_name=$_GET['name'];
$x="select * from item where name='$doctor_name'";
$y=mysqli_query($connect,$x);
while($z=mysqli_fetch_array($y))
	{
	?>
<img src="<?php echo 'medicare\medipics\'.$z[3];?>">
<?php
	}
}
?>


