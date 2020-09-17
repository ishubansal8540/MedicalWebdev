<html>
<head>
<?php
include("header.php");
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
<div style="border:hidden;width:600px;height:400px;border-radius:8px;box-shadow:15px 15px 6px skyblue;position:relative;left:350px;top:-20px;background-image:url('medipics/signup2.jpg')">
<table border="0px" style="width:600px;height:400px;float:left;border-radius:8px;">
<form method="post" action="" onsubmit="return vali();">
<tr><td><span style="text-align:center;position:relative;left:300px;color:white;font-size:1">Sign Up</span></td></tr>
 <tr><td><label style="position:relative;left:45px;float:left;">Username</label></td>
<td><input type="text" name="username" id="username" style="width:300px;position:relative;top:5px"></td></tr>
 <tr><td><label style="position:relative;left:45px;float:left;">Email</label></td>
 <td><input type="text" name="email" id="email" style="width:300px;position:relative;top:5px"></td></tr>
<tr><td><label style="position:relative;left:45px;top:0px;float:left">Password</label></td><td><input type="password" name="pswd" id="pass" style="width:300px;position:relative;top:0px"></td></tr>
<tr><td><label style="position:relative;left:45px;top:0px;float:left">Confirm Password</label></td><td><input type="password" name="confpswd" id="confpass" 
style="width:300px;position:relative;top:0px"></td></tr>
<tr><td><label style="position:relative;left:45px;top:0px;float:left">Gender</label></td><td><span style="position:relative;top:0px"><input type="radio" name="gender" value="Male" checked>Male</span><span style="position:relative;top:-35px;left:58px"><input type="radio" name="gender" value="Female">Female</span></td></tr>
<tr><td><label style="float:left;position:relative;left:45px;top:-65px">Contact</label></td><td><input type="text" name="contact" id="contact" style="width:300px;position:relative;top:-55px"></td></tr>
<tr><td><label style="position:relative;left:200px;top:-60px"><input type="submit" name="smt" class="btn btn-primary" value="Submit" checked></label></td>
<td><label style="position:relative;left:110px;top:-60px"><input type="reset" name="rst" class="btn btn-primary" value="Reset"></label></td></tr>
<a href="login1.php" style="position:relative;left:100px;top:360px">Alredy registered?Please Login.</a>
<!--<a href="change_password.php" style="position:relative;left:120px;top:360px">Change Password</a>
--></form>
</table>
</div>

<script>
function vali()
{
u=document.getElementById("username").value;
p=document.getElementById("pass").value;
cp=document.getElementById("confpass").value;
c=document.getElementById("contact").value;
if(u=="" && p=="" && cp=="" && c=="")
{
alert("Please fill data in all fields");
return false;
}
else if(u=="")
{
alert("Please fill username");
return false;
}
else if(p=="")
{
alert("Please fill password");
return false;
}
else if(cp=="")
{
alert("Please fill confirm password");
return false;
}
else if(p!=cp)
{
alert("Password and confirm password not matched");
return false;
}
else if(c=="")
{
alert("Please fill contact");
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
$email=$_POST['email'];
$pass=$_POST['pswd'];
$confpass=$_POST['confpswd'];
$gen=$_POST['gender'];
$cont=$_POST['contact'];
//$p=base64_encode($pass);
//$cp=base64_encode($confpass); 
include("admin/connect/db.php");
$insert="Insert into signup(username,email,password,confirm_password,gender,contact,status) values('$user','$email','$pass','$confpass','$gen','$cont',1)";
$value=mysqli_query($connect,$insert);
if($value)
{
echo "<script>alert('Your data inserted successfully')</script>";
}
else
{
echo "<script>alert('Oops something went wrong')</script>";
}
}
?>
</body>
</html>
<div style="position:relative;top:0px">
<?php
include("footer.php");
?>
</div>