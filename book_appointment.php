<?php
include("admin/connect/db.php");
session_start();
$username=$_SESSION['username'];

$time=$_GET['time'];
$doctor_name=$_GET['dname'];
$contact=$_SESSION['contact'];
$mail=$_SESSION['email'];
$address=$_SESSION['address'];
$x="Insert into appointment_fixed(username,current,doctor_name,contact,email,address) values('$username','$time','$doctor_name','$contact','$mail','$address')"; 
$y=mysqli_query($connect,$x);
if($y)
{?>

<head><script>alert("your appointment is fixed");</script></head>
<?php
}
else
{
echo"not";
}
?>