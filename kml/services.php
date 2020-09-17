	
<?php
include("header.php");
include("admin_panel/connect/db.php");
$x="select *from category";
$y=@mysql_query($x);
while($z=@mysql_fetch_array($y))
{
	echo"<a href=services.php?category=$z[1]>".$z[1]."</a><br>";
}
if(isset($_GET['category']))
{
	$b=$_GET['category'];
	$a="select * from subcategory where category='$b'";
	$done=@mysql_query($a);
	while($c=@mysql_fetch_array($done))
	{
		echo"<a href=item.php?scategory=$c[2] target='p'>".$c[2]."</a><br>";
	}

}
?>
<iframe src="" name="p" style="margin-left:200px;margin-top:10px;height:300px;width:400px;"></iframe>
<?php
include("footer.php");