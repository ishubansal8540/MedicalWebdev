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

<span style="position:relative;top:50px"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name</td><td><input type="text" name="name" id="name"></td></tr></span><br>
<tr><td><br><input type="submit" name="smt" class="btn btn-primary" value="Submit" span style="margin-left:20px;margin-top:10px;margin-bottom:10px"></td>
<td><br><input type="reset" name="rst" class="btn btn-primary" value="Reset" span style="margin-left:20px;margin-top:10px;margin-bottom:10px"></td></tr>
</table>
</form>


<script>
function vali()
{
name=document.getElementById("name").value;
if(name=="")
{
alert("Please fill name");
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
$name=$_POST['name'];
include("connect/db.php");
$insert="insert into category(name,status) values('$name',1)";
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