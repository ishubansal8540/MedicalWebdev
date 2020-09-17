<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<script src="jq.js"></script></script>
<!--script>
$(document).ready(function(){
$("input").focus(function(){
$(this).css({"background-color":"lightsteelblue","color":"white"});
});
$("input").blur(function(){
$(this).css({"background-color":"whitesmoke","color":"black"});
});
});
</script-->
</head>
<body>
<form method="post" action="" onsubmit="return vali();">
<table border="0 px">
<?php
include("connect/db.php");
echo "<select name='cat' style='position:relative;left:20px;top:10px'>";
$x="select * from category";
$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo"<option>".$c[1]."</option>";
}
echo"</select><br><br>";
?>

<?php
include("connect/db.php");
echo "<select name='subcate' style='position:relative;left:20px'>";
$x="select * from sub_category";
$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo"<option>".$c[2]."</option>";
}
echo"</select>";
?>


<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;DiseasesName </td><td><br><input type="text" name="diseasesname" id="diseasesname"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Detail</td><td><br><input type="text" name="detail" id="detail"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Image</td><td><br><input type="file" name="image" id="image"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Causes</td><td><br><textarea name="causes" id="causes"></textarea></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Symptoms</td><td><br><textarea name="symptoms" id="symptoms"></textarea></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Prevention</td><td><br><textarea name="prevention" id="prevention"></textarea></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Treatment</td><td><br><input type="text" name="medicine" id="medicine"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Username</td><td><br><input type="text" name="username" id="username"></td></tr>
<tr><td><br><input type="submit" name="smt" class="btn btn-primary" value="Submit" span style="margin-left:50px;margin-top:10px;margin-bottom:10px"></td>
<td><br><input type="reset" name="rst" class="btn btn-primary" value="Reset" span style="margin-left:20px;margin-top:10px;margin-bottom:10px"></td></tr>
</table>
</form>

<script>
function vali()
{
category=document.getElementById("category").value;
subcategory=document.getElementById("subcategory").value;
diseases=document.getElementById("diseasesname").value;
detail=document.getElementById("detail").value;
image=document.getElementById("image").value;
causes=document.getElementById("causes").value;
symptoms=document.getElementById("symptoms").value;
prevention=document.getElementById("prevention").value;
medicine=document.getElementById("medicine").value;
username=document.getElementById("username").value;
if(category=="" && subcategory=="" && diseases=="" && detail=="" && image=="" && username=="")
{
alert("Please fill data in all fields");
return false;
}
else if(category=="")
{
alert("Please fill category");
return false;
}
else if(subcategory=="")
{
alert("Please fill subcategory");
return false;
}
else if(diseases=="")
{
alert("Please fill diseases");
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
else if(causes=="")
{
alert("Please fill causes");
return false;
}
else if(symptoms=="")
{
alert("Please fill symptoms");
return false;
}
}else if(prevention=="")
{
alert("Please fill prevention");
return false;
}
else if(medicine=="")
{
alert("Please fill medicine");
return false;
}
else if(username=="")
{
alert("Please fill username");
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
if(isset($_POST['smt']))
{
$category=$_POST['cat'];
$subcat=$_POST['subcate'];
$diseases_name=$_POST['diseasesname'];
$detail=$_POST['detail'];
$image=$_POST['image'];
$causes=$_POST['causes'];
$symptoms=$_POST['symptoms'];
$prevention=$_POST['prevention'];
$medicine=$_POST['medicine'];
$username=$_POST['username'];
include("connect/db.php");
$insert="Insert into diseases(category,sub_category,diseases_name,detail,image,symptoms,causes,prevention,medicine,username,status) values('$category','$subcat','$diseases_name','$detail','$image','$symptoms','$causes','$prevention','$medicine','$username',1)";
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