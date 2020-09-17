<?php
session_start();
if(isset($_COOKIE['username']))
{
echo '<script>window.location="dashboard.php"</script>';
}
elseif(isset($_SESSION['name']))
{
echo '<script>window.location="dashboard.php"</script>';
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin panel</title>
  
  
  
      <link rel="stylesheet" href="login/css/style.css">

  
</head>


  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" method="post">
			<input type="text" placeholder="Username" name="user">
			<input type="password" placeholder="Password" name="pass">
			
			<center><table><tr><td><input type="checkbox" name="check" style="width:20%"></td><td>keep Me Logged In</td></tr></table>
			<input type="submit" name="sub">
		</form>
	</div>
	
<?php
if(isset($_POST['sub']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass1=base64_encode($pass);
include("connect/db.php");
$x="select * from admin where username='$user' and password='$pass1'";
$y=@mysql_query($x);
$n=@mysql_num_rows($y);
$z=@mysql_fetch_assoc($y);
if($n>0)
{
if(isset($_POST['keep']))
{

$_SESSION['name']=$z['username'];

setcookie("username","$user",time()+1*31*24*60*60);
setcookie("password","$pass",time()+1*31*24*60*60);
?>
<script>
window.location="dashboard.php";
</script>
<?php
}
else
{

$_SESSION['name']=$z['username'];
?>
<script>
window.location="dashboard.php";
</script>
<?php
}
}
else
{
echo "<script>alert('oops something went wrong')</script>";
}
}
}
?>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="login/js/index.js"></script>

</body>
</html>