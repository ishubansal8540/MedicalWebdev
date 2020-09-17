<?php
include("connect/db.php");
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];

$a="select * from doc_hm where id='$sno'";
$b=mysqli_query($connect,$a);
while($c=mysqli_fetch_array($b))
{
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $c[0];?>">
<input type="text" name="spcl" value="<?php echo $c[1];?>">
<input type="text" name="name" value="<?php echo $c[2];?>">
<input type="text" name="add" value="<?php echo $c[3];?>" >
<input type="text" name="fees" value="<?php echo $c[4];?>">

<input type="text" name="cont" value="<?php echo $c[5];?>">
<input type="text" name="email" value="<?php echo $c[6];?>">
<input type="text" name="pass" value="<?php echo $c[7];?>">
<input type="submit" name="smt" value="submit">
</form>
<?php
}
}
if(isset($_POST['smt']))
{
$id=$_POST['id'];
$spcl=$_POST['spcl'];
$name=$_POST['name'];
$add=$_POST['add'];
$fees=$_POST['fees'];
$cont=$_POST['cont'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$x="update doc_hm set specilization='$spcl',doctorName='$name',address='$add',docFees='$fees',contactno='$cont',docEmail='$email',password='$pass' where id='$id'";
$y=mysqli_query($connect,$x);
if($y)
{
header("location:view_doctor.php");
}
else
{
echo "not".mysqli_error($connect);
}
}



?>