<?php
include("connect/db.php");
if(isset($_REQUEST['sno']))
{
$get=$_REQUEST['sno'];
$x="delete from gym where sno='$get'";
$y=mysqli_query($connect,$x);
if($y)
{
header("location:view_gym.php");
}
else
{
echo "<script>alert('Oops something went wrong')</script>";
}
}
else
{
header("location:view_gym.php");
}
?>