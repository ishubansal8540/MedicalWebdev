
<?php
include("header.php");
?>
<style>
#s1
{
	height:30px;
	width:200px;
	border-style:outset;
	position:relative;
	border-color:black;
	left:10px;
	top:20px;
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
<img src="medipics/doctordiv.jpg" height="700px" width="2000px">
<div style="height:600px;width:700px;position:relative;top:-680px">
<img src="medipics/doctors.png" height="600px" width="800px">
</div>
<form method="post">
<div style="height:400px;width:400px;border-style:inset;background-color:white;position:relative;left:850px;top:-1170px;border-radius:8px">
<table style="border-style:solid">
<tr><td><label style="position:relative;left:5px;top:12px">Username</td><td><input type="text" name="user" id="s1"></td></tr>
<tr><td><label style="position:relative;left:5px;top:12px">Detail</td><td><input type="text" name="dt" id="s1"></td></tr>
<tr><td><label style="position:relative;left:5px;top:12px">Image</td><td><input type="file" name="data" id="s1"></td></tr>
<tr><td><label style="position:relative;left:5px;top:10px">Address</td><td><textarea name="adres" style="height:50px;width:200px;border-style:outset;position:relative;border-color:black;left:10px;top:20px;border-radius:8px"></textarea></td></tr>
<tr><td><label style="position:relative;left:5px;top:12px">Achievements</td><td><input type="text" name="ach" id="s1"></td></tr>


<input type="submit" name="smt" class="btn btn-primary" value="Submit">
<input type="reset" name="rst" class="btn btn-primary" value="Reset">
</form>
</table>
</div>
</img>
</body>
</html>



<?php
if(isset($_POST['smt']))
{
$user=$_POST['user'];
$detail=$_POST['dt'];
$address=$_POST['adres'];
$achieve=$_POST['ach'];
$image=$_POST['data'];
include("connect/db.php");
$x="Insert into doctor(name,detail,image,address,achievement,status) values('$user','$detail','$address','$achieve','$image',1)";
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
<?php
include("footer.php");
?>