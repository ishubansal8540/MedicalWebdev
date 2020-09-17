<?php
if(isset($_COOKIE['username']))
{
$s=$_COOKIE['username'];
echo "welcome::$s";
}
else
{
header("location:user.php");
}
?>
<a href="user_logout.php">Logout</a>
