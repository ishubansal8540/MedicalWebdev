<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<body style="background-color:#f7f7f7">
  <div class="page animsition vertical-align text-center"> 
      <div class="page-content vertical-align-center-middle">
      <h2>Change Your Password ?</h2>
      <p>Input your registered username to reset your password</p>
<form method="post">
<div class="form-group">

<div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Your Username" style="position:relative;width:400px;left:480px">
        </div>

<div class="form-group">
<input type="password" class="form-control" name="old" placeholder="Old Password" style="position:relative;width:400px;left:480px">
        </div>
		<div class="form-group">

<input type="password" class="form-control" name="new" placeholder="New Password" style="position:relative;width:400px;left:480px">
        </div>
        <div class="form-group">
		 <input type="submit" class="btn btn-primary" name="smt" style="position:relative;width:400px;"value="Reset Your Password">
        </div>
		

</form>
<?php
if(isset($_POST['smt']))
{
$old=$_POST['old'];
//$old1=base64_encode($old);
$new=$_POST['new'];
//$new1=base64_encode($new);
include("connect/db.php");
$x="Select * from admin where password='$old'";
$y=mysqli_query($connect,$x);
$n=mysqli_num_rows($y);
$z=mysqli_fetch_assoc($y);
if($n>0)
{
$a="update admin set password='$new' where password='$old'";
$b=mysqli_query($connect,$a);
if($b)
{
echo "<script>alert('Updated')</script>";
header("location:dashboard.php");
}
}
else
{
echo "<script>alert('Wrong password')</script>".mysqli_error($connect);
}
}
?>