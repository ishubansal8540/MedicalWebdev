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
<form method="post" action="" onsubmit="return vali();"  enctype="multipart/form-data">
<table border="0 px">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Category</td><td><br><input type="text" name="cat" id="cname"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Item&nbsp;&nbsp;</td><td><br><input type="text" name="it" id="itm"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Detail</td><td><br><input type="text" name="detaill" id="dtail"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Image</td><td><br><input type="file" name="image" id="img"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Price</td><td><br><input type="text" name="mrp" id="prc"></td></tr>
<tr><td><br><input type="submit" name="smt" class="btn btn-primary" value="Submit" span style="margin-left:50px;margin-top:10px;margin-bottom:10px"></td>
<td><br><input type="reset" name="rst" class="btn btn-primary" value="Reset" span style="margin-left:20px;margin-top:10px;margin-bottom:10px"></td></tr>


</table>
</form>


<script>
function vali()
{
c=document.getElementById("cname").value;
i=document.getElementById("itm").value;
d=document.getElementById("dtail").value;
im=document.getElementById("img").value;
p=document.getElementById("prc").value;
if(c=="" && i=="" && d=="" im==""  && p=="")
{
alert("Please fill data in all fields");
return false;
}
else if(c=="")
{
alert("Please fill categroy");
return false;
}
else if(i=="")
{
alert("Please fill item");
return false;
}
else if(d=="")
{
alert("Please fill detail");
return false;
}
else if(im=="")
{
alert("Please select image");
return false;
}
else if(p=="")
{
alert("Please fill price");
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
$category_name=$_POST['cat'];
$item_name=$_POST['it'];
$detail_name=$_POST['detaill'];
$price_name=$_POST['mrp'];
$name=$_FILES['image']['name'];
$type=$_FILES['image']['type'];
$size=$_FILES['image']['size'];
$temp=$_FILES['image']['tmp_name'];
$path="doctors_images/$name";

if($name=="")
{
echo "Please select image";
}
else 
{
$move=move_uploaded_file($temp,$path);

}
$insert="Insert into gym(category,item,detail,image,price,status) values('$category_name','$item_name','$detail_name','$name','$price_name',1)";
$value=mysqli_query($connect,$insert);
if($value)
{
echo "<script>alert('Your data inserted successfully')</script>";
}
else
{
echo"Oops something went wrong".mysqli_error($connect);
}
}
?>
</body>
</html>