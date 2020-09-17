<?php
if(isset($_COOKIE['user']))
{
$s=$_COOKIE['user'];
echo "welcome::$s";
}
else
{
header("location:index.php");
}
?>
<a href="logout.php">Logout</a>
