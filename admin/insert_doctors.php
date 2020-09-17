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

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Specialization </td><td><br><input type="text" name="spcl" id="spcl"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Doctor Name</td><td><br><input type="text" name="doc" id="doc"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Address</td><td><br><textarea name="add" id="add"></textarea></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Doctor Fees</td><td><br><input type="text" name="fees" id="fees"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;ContactNo</td><td><br><input type="number" name="no" id="no"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Email Id</td><td><br><input type="text" name="email" id="email"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Password</td><td><br><input type="text" name="pass" id="pass"></td></tr>

<tr><td><br><input type="submit" name="smt" class="btn btn-primary" value="Submit" span style="margin-left:50px;margin-top:10px;margin-bottom:10px"></td>
</tr>
</table>


<?php
if(isset($_POST['smt']))
{
$spcl=$_POST['spcl'];
$doc=$_POST['doc'];
$add=$_POST['add'];
$fees=$_POST['fees'];
$no=$_POST['no'];
$email=$_POST['email'];
$pswd=$_POST['pass'];
include("connect/db.php");
$insert="Insert into doc_hm(specilization,doctorName,address,docFees,contactno,docEmail,password) values('$spcl','$doc','$add','$fees','$no','$email','$pswd')";
$value=mysqli_query($connect,$insert);
if($value)
{
echo "<script>alert('Your data inserted successfully')</script>";
}
else
{
echo "<script>alert('Oops something went wrong')</script>".mysqli_error($connect);
}
}
?>
</body>
</html>