<?php
if(isset($_REQUEST['sno']))
{
$get=$_REQUEST['sno'];
include("connect/db.php");
$x="delete from category where sno='$get'";
$y=mysqli_query($connect,$x);
if($y)
{
header("location:view_category.php");
}
else
{
echo "<script>alert('Oops something went wrong')</script>";
}
}
else
{
header("location:view_category.php");
}
?>