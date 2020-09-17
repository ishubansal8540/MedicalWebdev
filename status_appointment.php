<?php
include("connect/db.php");
if(isset($_GET['st']))
{
$st=$_GET['st'];
$a="select * from appointment where sno='$st'";
$b=mysqli_query($connect,$a);
while($c=mysqli_fetch_array($b))
{
if($c['status']==0)
{
$m="update appointment set status=1 where sno='$st'";
mysqli_query($connect,$m);
header("location:view_appointment.php");
}
else
{
$m="update appointment set status=0 where sno='$st'";
mysqli_query($connect,$m);
header("location:view_appointment.php");
}
}
}
else
{
header("location:view_appointment.php");
}
?>
