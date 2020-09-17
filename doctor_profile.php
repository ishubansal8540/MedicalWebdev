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
<img src="amrit/medipics/doctordiv.jpg" height="600px" width="2000px">
<div style="height:200px;width:700px;position:relative;top:-680px">
<img src="medipics/doctor.png" height="580px" width="800px" style="position:relative;left:20px;top:90px">

<div style="border:hidden;width:500px;height:580px;border-radius:8px;position:relative;float:right;top:-490px;left:630px;background-color:white">

<table border="0px" style="width:600px;height:400px;float:left;border-radius:8px;z-index:100">

<form method="post" action="" onsubmit="return vali();">
 
<tr><td><label style="position:relative;left:45px;top:65px;float:left;font-style:italic">Name</label></td>
<td><input type="text" name="dname" id="name" style="width:300px;position:relative;top:65px;border-radius:8px;font-style:italic"></td></tr>
<tr><td><label style="position:relative;left:45px;top:70px;float:left;font-style:italic">Detail</label></td><td><input type="text" name="detail" id="detail" style="width:300px;position:relative;top:70px;border-radius:8px;font-style:italic"></td></tr>
<tr><td><label style="position:relative;left:45px;top:70px;float:left;font-style:italic">Image</label></td><td><input type="file" name="image" id="image" 
style="width:300px;position:relative;top:60px;border-radius:8px;font-style:italic"></td></tr>

<tr><td><label style="float:left;position:relative;left:45px;top:50px;font-style:italic">Address</label></td><td><textarea name="address" id="address" style="width:300px;position:relative;top:70px;border-radius:8px;font-style:italic"></textarea></td></tr>
<tr><td><label style="float:left;position:relative;left:45px;top:70px;font-style:italic">Contact</label></td><td><input type="text" name="contact" id="contact" style="width:300px;position:relative;top:70px;border-radius:8px;font-style:italic"></td></tr>
<tr><td><label style="float:left;position:relative;left:45px;top:80px;font-style:italic">Achievement</label></td><td><input type="text" name="achieve" id="achieve" style="width:300px;position:relative;top:80px;border-radius:8px;font-style:italic"></td></tr>
<tr><td><label style="position:relative;left:200px;top:90px"><input type="submit" name="smt" class="btn btn-primary" value="Submit"></label></td>
<td><label style="position:relative;left:150px;top:90px"><input type="reset" name="rst" class="btn btn-primary" value="Reset"></label></td></tr>
</form>
</table>
</div>

</div>

<script>
function vali()
{
name=document.getElementById("name").value;
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
alert("Please fill achieve");
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
$doctor_name=$_POST['dname'];
$detail=$_POST['detail'];
$image=$_FILES['image'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$achieve=$_POST['achieve'];

include("admin/connect/db.php");
$insert="Insert into doctor(doctor_name,detail,image,address,Contact,achievement,status) values('$doctor_name','$detail','$image','$address','$contact','$achieve',1)";
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
<div style="position:relative;top:-199px">
<?php
include("footer.php");
?>
</div>