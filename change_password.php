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
<div style="border:hidden;width:450px;height:250px;border-radius:8px;position:relative;top:20px;left:400px;background-color:#f7f7f7">
<table border="0px">
<form method="post"  onsubmit="return vali();">
<tr><td></td>
<td><input type="password" name="old" placeholder="Old Password" id="oldpass" style="width:300px;position:relative;top:40px;left:-10px;border-radius:8px;"></td></tr>
<tr><td></td>
<td><input type="password" name="new" placeholder="New Password" id="newpass" style="width:300px;position:relative;top:65px;left:-10px;border-radius:8px;"></td></tr>
<tr><td></td>
<td><input type="password" name="confirm" placeholder="Confirm New Password" id="confnewpass" style="width:300px;position:relative;top:85px;left:-10px;border-radius:8px;"></td></tr>
<tr><td><label style="position:relative;left:139px;top:90px"><input type="submit" name="smt" value="Submit" class="btn btn-primary"></label></td>
<td><label style="position:relative;left:140px;top:90px"><input type="reset" name="reset" value="Reset" class="btn btn-primary"></label></td></tr>
</form>
</table>
</div>

<script>
function vali()
{
o=document.getElementById("oldpass").value;
n=document.getElementById("newpass").value;
cn=document.getElementById("confnewpass").value;
if(o=="" && n=="" && cn=="")
{
alert("Please fill data in all fields");
return false;
}
else if(o=="")
{
alert("Please fill old password");
return false;
}
else if(n=="")
{
alert("Please fill new password");
return false;
}
else if(cn=="")
{
alert("Please fill confirm new password");
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
$old=$_POST['old'];
$new=$_POST['new'];
$confirm=$_POST['confirm'];
/*
$old1=base64_encode($old);
$new1=base64_encode($new);*/
include("admin/connect/db.php");
$x="select * from signup where password='$old'";
$y=mysqli_query($connect,$x);
$n=mysqli_num_rows($y);
$z=mysqli_fetch_assoc($y);
if($n>0)
{
$update="update signup set password='$new',confirm_password='$new' where password='$old'";
$updated=mysqli_query($connect,$update);
if($updated)
{
echo "<script>alert('Password has changed')</script>";
}
}
else
{
echo "<script>alert('Password doesn't match')</script>".mysqli_error($connect);
}
}
?>
<div style="position:relative;top:60px">
<?php
include("footer.php");
?>
</div>