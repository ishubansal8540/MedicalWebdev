<?php
include("connect/db.php");
$user='Admin';
$pass='admin123';
$p=base64_encode($pass);
$insert="insert into admin(user,password) values('$user','$p')";
$value=mysqli_query($connect,$insert);
if($value)
{
echo "Values inserted";
}
else
{
echo "Values not inserted".mysqli_error($connect);
}
?>