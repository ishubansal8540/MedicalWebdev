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
<img src="amrit/medipics/contact-us.jpg" style="position:relative;top:-20px">
<div style="border:hidden;width:500px;height:400px;border-radius:8px;
position:relative;left:60px;top:-500px;background-image:url('amrit/medipics/div1.jpg')">
<table border="0px" style="width:600px;height:400px;float:left;border-radius:8px;z-index:100px">
<form method="post" action="" onsubmit="return vali();">
<tr><td><label style="position:relative;left:45px;float:left;color:white">Username</label></td><td><input type="text" name="username" id="username" 
style="width:300px;position:relative;top:10px;left:20px;"></td></tr>
<tr><td><label style="position:relative;left:45px;float:left;color:white">Email_id</label></td><td><input type="email" name="email" id="email" style="width:300px;position:relative;top:10px;left:20px"></td></tr>
<tr><td><label style="position:relative;left:45px;float:left;color:white">Address</label></td><td><textarea name="address" id="address"  style="width:300px;position:relative;top:10px;left:20px"></textarea></td></tr>
<tr><td><label style="position:relative;left:45px;float:left;color:white">Contact</label></td><td><input type="text" name="contact" id="contact"  style="width:300px;position:relative;top:10px;left:20px"></td></tr> 
<tr><td><label style="position:relative;left:45px;float:left;color:white">Message</label></td><td><input type="text" name="message" id="message"  style="width:300px;position:relative;top:10px;left:20px"></td></tr>
<tr><td><label style="position:relative;top:10px;left:140px"><input type="submit" name="smt" class="btn btn-primary" value="Submit"></label></td>
<td><label style="position:relative;top:10px;left:120px"><input type="reset" name="rst" class="btn btn-primary" value="Reset"></td></tr>
</form>
</table>
</div>
<script>
function vali()
{
u=document.getElementById("username").value;
e=document.getElementById("email").value;
a=document.getElementById("address").value;
c=document.getElementById("contact").value;
m=document.getElementById("message").value;
if(u=="" && e=="" && a=="" && c=="" && m=="")
{
alert("Please fill data in all fields");
return false;
}
else if(u=="")
{
alert("Please fill username");
return false;
}
else if(e=="")
{
alert("Please fill email");
return false;
}
else if(a=="")
{
alert("Please fill address");
return false;
}
else if(c=="")
{
alert("Please fill contact");
return false;
}
else if(m=="")
{
alert("Please fill message");
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
$address=$_POST['address'];
$cont=$_POST['contact'];
$message=$_POST['message'];
include("admin/connect/db.php");
$insert="Insert into contact_us(username,email_id,address,contact,message,status) values('$user','$email','$address','$cont','$message',1)";
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
<p>
</body>
</html>
<div style="position:relative;top:-430px">
<?php
include("footer.php");
?>
</div>