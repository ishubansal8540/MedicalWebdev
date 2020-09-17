<html>
<head>
<?php
ob_start();
session_start();
include("admin/connect/db.php");
include("header.php");
if(isset($_COOKIE['username']) || isset($_SESSION['name']))
{
?>
<link type="text/css" rel="stylesheet" href="admin/css/bootstrap.min.css">
<script src="../jq.js"></script>
<script>	
$(document).ready(function(){
$("input").focus(function(){
$(this).css({"background-color":"lightsteelblue","color":"white"});
});
$("input").blur(function(){
$(this).css({"background-color":"whitesmoke","color":"black"});
});
});
</script>
<body>
<?php
$item=$_GET['it'];
$price=$_GET['price'];
?>

<?php
$time=$_GET['time'];
$doctor_name=$_GET['dname'];
?>

<div style="border:hidden;width:900px;height:500px;border-radius:8px;box-shadow:15px 15px 8px gray;position:relative;left:50px;top:-20px;background-image:url('amrit/medipics/login.jpg');margin:auto">
<table border="0px" style="width:600px;height:400px;float:left;border-radius:8px;z-index:100">
<form method="post" action="" onsubmit="return vali();">
<tr><td><label style="position:relative;left:45px;top:140px;float:left;color:white">Username</label></td><td><input type="text" name="username" id="username" style="position:relative;top:140px;width:300px"></td></tr>
<tr><td><label style="position:relative;left:45px;top:120px;float:left;color:white">Password</label></td><td><input type="password" name="pswd" id="pass" style="position:relative;width:300px;top:120px"></td></tr>
<input type="hidden" name="it" value="<?php echo $item;?>">
<input type="hidden" name="price" value="<?php echo $price;?>">

<input type="hidden" name="time" value="<?php echo $time;?>">
<input type="hidden" name="dname" value="<?php echo $doctor_name;?>">

<tr><td><label style="position:relative;left:45px;top:130px;float:left;color:white"><input type="checkbox" name="ch" value="cookie" style="position:relative ;left:10px"><label style="position:relative;top:-15px;left:30px">Keep me logged in</label></td></tr>
<tr><td><label style="position:relative;left:200px;top:100px;float:left"><input type="submit" name="smt" class="btn btn-primary" value="submit"></label>
<label style="position:relative;left:220px;top:100px;float:left"><input type="reset" name="rst" class="btn btn-primary" value="Reset"></label></td></tr>
<a href="signup.php" style="position:relative;left:-400px;top:450px;">Not registered yet?Signin</a>
</form>
</table>
</div>
<script>
function vali()
{
name=document.getElementById("username").value;
pswd=document.getElementById("pass").value;
if(name=="" && pswd=="")
{
alert("Please fill data in all fields");
return false;
}
else if(name=="")
{
alert("Please fill name");
return false;
}
else if(pswd=="")
{
alert("Please fill password");
return false;
}
else
{
alert("It's done");
return true;
}
}
</script>
<?php
if(isset($_POST['smt']))
{
$user=$_POST['username'];
$pass=$_POST['pswd'];
$item=$_POST['it'];
$price=$_POST['price'];
$time=$_POST['time'];
$doctor_name=$_POST['dname'];
$p=base64_encode($pass);
include("admin/connect/db.php");
$x="Select * from signup where username='$user' and password='$p'";
$y=mysqli_query($connect,$x);
$n=mysqli_num_rows($connect,$y);
$z=mysqli_fetch_assoc($connect,$y);
if($n>0)
{
if(isset($_POST['ch']))
{
$_SESSION['time']=time();
$_SESSION['name']=$z['username'];
$_SESSION['email']=$z['email'];
setcookie("username","$user",time()+4*24*3600);
setcookie("password","$pass",time()+4*24*3600);
header("location:cart.php?it=$item&price=$price");
}
else
{
$_SESSION['time']=time();
$_SESSION['name']=$z['username'];
$_SESSION['email']=$z['email'];
header("location:cart.php?it=$item&price=$price");
}
}
else
{
?>
<script>alert("Wrong username and password");</script>
<?php
}
}
?>
</body>
</html>
<div style="position:relative;top:-10px">
<?php
include("footer.php");
}
?>
</div>
