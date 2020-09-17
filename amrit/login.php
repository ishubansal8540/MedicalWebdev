<?php
include("header.php");
if(isset($_COOKIE['username']))
{
window.location="doctor.php";
}
else
{
?>
<style>
#s1
{
	height:30px;
	width:200px;
	border-color:gray;
    border-style:solid;
	border-radius:3px;
	position:relative;
	top:200px;
    left:-190px;
}
</style>
<link type="text/css" rel="stylesheet" href="admin/css/bootstrap.min.css">
<script src="jq.js">
</script>
<script>
$(document).ready(function()
{
	$("input").focus(function()
	{
	$(this).css({"background-color":"lightsteelblue","color":"white"});
	});
	$("input").blur(function()
	{
		$(this).css({"background-color":"whitesmoke","color":"black"});
	});
});
</script>

<div style="height:500px;width:900px;border-style:hidden;border-radius:8px;;box-shadow:15px 15px 10px gray;position:relative;top:100px;left:200px;background-image:url('medipics/login.jpg')">
<table style="border-style:hidden;z-index:100">
<form method="post">
<tr><td>
<label style="position:relative;left:30px;top:192px;color:white">Username </td><td><input type="text" name="usrname" id="s1"></td></tr>
<tr><td>
<label style="position:relative;left:30px;top:192px;color:white">Password</td><td> <input type="password" name="pswd" id="s1"></td></tr>
<tr><td><input type="checkbox" name="ch" value="cookie" style="position:relative;left:170px;top:220px"><label style="position:relative;left:200px;top:203px;color:white">Keep me logged in</td></tr>
<input type="submit" name="smt" class="btn btn-primary" value="submit" style="position:relative;top:380px;left:180px">
<input type="reset" name="rst" class="btn btn-primary" value="Reset" style="position:relative;top:380px;left:230px">

</form>
</table>
</div>

<?php
if(isset($_POST['smt']))
{
$user=$_POST['usrname'];
$pass=$_POST['pswd'];
$p=base64_encode($pass);
include("admin/connect/db.php");
$x="Select * from signup where username='$user' and password='$p'";
$y=@mysql_query($x);
$n=@mysql_num_rows($y);
$z=@mysql_fetch_assoc($y);
if($n>0)
{
if(isset($_POST['ch']))
{
setcookie("username","$user",time()+4*24*3600);
setcookie("password","$pass",time()+4*24*3600);
header("location:user_profile.php");
}
else
{
session_start();
$_SESSION['name']=$z['username'];
header("location:user_profile.php");
}
}
else
{
echo "<script>alert('Wrong username and password')</script>";
}
}
}

?>
<div style="position:relative;top:200px">
<?php
include("footer.php");
?>