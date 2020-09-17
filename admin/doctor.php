<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<script src="jq.js"></script></script>
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
</head>
<body>
<form method="post" action="" onsubmit="return vali();"  enctype="multipart/form-data">
<table border="0 px">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name of doctor</td><td><br><input type="text" name="dname" id="doctorname"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Detail&nbsp;&nbsp;</td><td><br><input type="text" name="detail" id="detail"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Image</td><td><br><input type="file" name="image" id="image"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Address</td><td><br><input type="textarea" name="address" id="address"></textarea></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Contact</td><td><br><input type="text" name="contact" id="contact"><p/td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Achievement</td><td><br><input type="text" name="achieve" id="achieve"><p/td></tr>
<tr><td><br><input type="submit" name="smt" class="btn btn-primary" value="Submit" span style="margin-left:50px;margin-top:10px;margin-bottom:10px"></td>
<td><br><input type="reset" name="rst" class="btn btn-primary" value="Reset" span style="margin-left:20px;margin-top:10px;margin-bottom:10px"></td></tr>
</table>
</form>

<script>
function vali()
{
name=document.getElementById("doctorname").value;
detail=document.getElementById("detail").value;
image=document.getElementById("image").value;
address=document.getElementById("address").value;
contact=document.getElementById("contact").value;
achieve=document.getElementById("achieve").value;
if(name=="" && detail=="" && image=="" && address=="" && contact=="" && achieve=="")
{
alert("Please fill data in all fields");
return false;
}
else if(name=="")
{
alert("Please fill name");
return false;
}
else if(detail=="")
{
alert("Please fill detail");
return false;
}
else if(image=="")
{
alert("Please select image");
return false;
}
else if(address=="")
{
alert("Please fill address");
return false;
}
else if(contact=="")
{
alert("Please fill contact");
return false;
}
else if(achieve=="")
{
alert("Please fill achievement");
return false;
}
else
{
alert ("It's done");
return true;
}
}
</script>

<?php
include("connect/db.php");
if(isset($_POST['smt']))
{
$doctor_name=$_POST['dname'];
$detail=$_POST['detail'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$achievement=$_POST['achieve'];

$name=$_FILES['image']['name'];
$type=$_FILES['image']['type'];
$size=$_FILES['image']['size'];
$temp=$_FILES['image']['tmp_name'];
$path="doctors_images/$name";
echo $name;
echo $type;
echo $size;
echo $temp;
if($name=="")
{
echo "Please select image".mysql_error($connect);
}
else 
{
$move=move_uploaded_file($temp,$path);
if($move)
{
echo "File uploaded";
}
else 
{
echo "File not uploaded";
}
}
$insert="Insert into doctor(doctor_name,detail,image,address,achievement,Contact,status) values('$doctor_name','$detail','$name','$address','$achievement','$contact',1)";
$value=mysqli_query($connect,$insert);
if($value)
{
echo "<script>alert('Your data inserted successfully')</script>";
}
else
{
echo"Oops something went wrong".mysql_error($connect);
}
}
?>
</body>
</html>