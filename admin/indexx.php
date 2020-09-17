<?php
if(isset($_COOKIE['user']))
{
header("location:profile.php");
}
else
{
?>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<form method="post">
Username <input type="text" name="usrname"><p><p>
Password <input type="password" name="pswd"><p>
<input type="checkbox" name="ch" value="cookie">Keep me logged in<p>
<input type="submit" name="smt" class="btn btn-primary" value="submit">
<input type="reset" name="rst" class="btn btn-primary" value="Reset">
</form>

<?php
if(isset($_POST['smt']))
{
$user=$_POST['usrname'];
$pass=$_POST['pswd'];
$p=base64_encode($pass);
include("connect/db.php");
$x="Select * from admin where user='$user' and password='$p'";
$y=mysqli_query($connect,$x);
$n=mysqli_num_rows($connect,$y);
$z=mysqli_fetch_assoc($connect,$y);
if($n>0)
{
if(isset($_POST['ch']))
{
setcookie("user","$user",time()+4*24*3600);
setcookie("password","$pass",time()+4*24*3600);
header("location:profile.php");
}
else
{
session_start();
$_SESSION['name']=$z['user'];
header("location:profile.php");
}
}
else
{
echo "Wrong username and password".mysqli_error($connect);
}
}
}

?>