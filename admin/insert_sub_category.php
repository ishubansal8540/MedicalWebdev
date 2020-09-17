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
echo "<select name='cat' style='position:relative;left:30px;top:20px'>";
$x="select * from category";
$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo"<option>".$c[1]."</option>";
}
echo"</select>";
?>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<span style="position:relative;top:40px">Sub_category</span></td><td><span style="position:relative;top:40px"><input type="text" name="subcategory" id="subcategory"></span></td></tr></span><br>

<tr><td><input type="submit" name="smt" class="btn btn-primary" value="Submit" style="position:absolute;left:50px;top:130px;"></td>
<td><br><input type="reset" name="rst" class="btn btn-primary" value="Reset"  style="position:absolute;top:130px;left:130px"></td></tr>



</table>
</form>
<script>
function vali()
{
category=document.getElementById("catname").value;
subcategory=document.getElementById("subcategory").value;
if(category=="" && subcategory=="")
{
alert("Please fill all the fields");
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
$catname=$_POST['cat'];
$subcat=$_POST['subcategory'];
include("connect/db.php");
$insert="Insert into sub_category(category_name,sub_category) values('$catname','$subcat')";
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