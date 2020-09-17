<?php
@mysql_connect("localhost","root","");
@mysql_select_db("medicare");
include("header.php");
if(isset($_GET['subcategory']))
{
$sub=$_GET['subcategory'];
$x="select * from diseases where subcategory='$sub'";
$y=@mysql_query($x);
while($z=@mysql_fetch_array($y))
	{
		echo $z[2].@mysql_error();
	}
}
?>
<div style="position:relative;top:500px">
<?php
include("footer.php");
?>