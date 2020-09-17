<?php
include("admin_panel/connect/db.php");
if(isset($_GET['scategory']))
{
$sub=$_GET['scategory'];
$x="select * from item where subcategory='$sub'";
$y=@mysql_query($x);
while($z=@mysql_fetch_array($y))
	{
		echo $z[3]."<br>";
	}
}
?>