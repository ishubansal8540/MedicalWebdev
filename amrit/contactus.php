<?php
include("header.php");
?>
<style>
#s1
{
	height:30px;
	width:200px;
	border-color:gray;
	border-style:outset;
	position:relative;
	bottom:900px;
    left:-120px;
	border-radius:8px;
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
<html>
<body>
<img src="medipics/contact-us.jpg">

<table style="borde-style:hidden;z-index:100">
<div style="height:400px;width:400px;border-style:inset;border-color:black;border-radius:8px;position:relative;left:100px;top:-550px;box-shadow:10px 10px 6px black;background-image:url('medipics/div1.jpg')">
<form method="post">

<tr><td>
<label style="position:relative;left:130px;bottom:910px;color:white">Username</td><td> <input type="text" name="username" id="s1"></td></tr>
<tr><td>
<label style="position:relative;left:130px;bottom:910px;color:white">Email_ID</td><td><input type="email" name="em" id="s1"></td></tr>
<tr><td>
<label style="position:relative;left:130px;bottom:930px;color:white">Address</td><td><textarea name="adrs" style="width:200px;position:relative;bottom:900px;left:-120px;border-radius:8px"></textarea></td></tr>
<tr><td>
<label style="position:relative;left:130px;bottom:910px;color:white">Contact Us</td><td><input type="text" name="contact" style="height:30px;width:200px;position:relative;bottom:900px;left:-120px;border-radius:8px"></td></tr>
<tr><td>
<label style="position:relative;left:130px;bottom:910px;color:white">Message</td><td><input type="text" name="msg" id="s1"></td></tr>
<input type="submit" name="smt" class="btn btn-primary" value="Submit" style="position:relative;left:200px;bottom:600px">
<input type="reset" class="btn btn-primary" value="Reset" style="position:relative;left:300px;bottom:600px">

</form>
</table>
</div>
</img>
</body>
</html>
<?php
if(isset($_POST['smt']))
{
$user=$_POST['username'];
$email=$_POST['em'];
$add=$_POST['adrs'];
$cont=$_POST['contact'];
$mesg=$_POST['msg'];
include("admin/connect/db.php");
$x="Insert into contactus(username,email,address,contact,message,status) values('$user','$email','$add','$cont','$mesg',1)";
$y=@mysql_query($x);
if($y)
{
echo "<script>alert('Your data inserted successfully')</script>";
}
else
{
echo "<script>alert('oops something went wrong')</script>";
}
}
?>
<div style="width:1350px;position:absolute;top:950px">
<?php
include("footer.php");
?>
</div>