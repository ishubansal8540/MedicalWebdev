	
<?php
include("header.php");
include("admin/connect/db.php");
$x="select * from category";
$y=mysqli_query($connect,$x);
while($z=@mysql_fetch_array($y))
{
	echo"<a href=services.php?category=$z[1]>".$z[1]."</a><br>";
}
if(isset($_GET['category']))
{
	$b=$_GET['category'];
	$a="select * from subcategory where category='$b'";
	$x=mysqli_query($connect,$a);
	while($z=@mysql_fetch_array($x))
	{
		echo"<a href=diseases.php?scategory=$z[2] target='p'>".$z[2]."</a><br>";
	}

}
?>
<iframe src="" name="p" style="margin-left:200px;margin-top:10px;height:300px;width:400px;"></iframe>
<?php
include("footer.php");