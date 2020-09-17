<?php
session_start();
if(isset($_COOKIE['username']))
{
$u=$_COOKIE['username'];
echo "welcome$u";
}
else if(isset($_SESSION['name']))
{
$s=$_SESSION['name'];
echo "welcome$s";
}
else
{
header("location:login.php");
}
?>
<a href="logout.php">logout</a>
