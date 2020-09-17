<?php
if(isset($_REQUEST['sno']))
{
$get=$_REQUEST['sno'];
include("connect/db.php");
$x="Delete from diseases where sno='$get'";
$y=mysqli_query($connect,$x);
if($y)
{
header("location:view_diseases.php");
}
else
{
echo "<script>alert('Oops something went wrong')</script>";
}
}

?>