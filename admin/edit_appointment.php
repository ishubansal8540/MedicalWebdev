<?php
include("connect/db.php");
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];

$a="select * from appointment where sno='$sno'";
$b=mysqli_query($connect,$a);
while($c=mysqli_fetch_array($b))
{
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $c[0];?>">
<input type="text" name="dname" value="<?php echo $c[1];?>">
<input type="text" name="appointment" value="<?php echo $c[2];?>">
<input type="text" name="date" value="<?php echo $c[6];?>">
<input type="submit" name="smt" value="submit">
</form>
<?php
}
}
if(isset($_POST['smt']))
{
$id=$_POST['id'];
$doctor_name=$_POST['dname'];
$appointment=$_POST['appointment'];
$date=$_POST['date'];

if($doctor_name=="")
{
$x="update appointment set doctor_name='$doctor_name',appointment='$appointment',date='$date' where sno='$id'";
$y=mysqli_query($connect,$x);
if($y)
{
echo "done";
}
else
{
echo "not".mysqli_error($connect);
}
}
else
{
$x="update appointment set doctor_name='$doctor_name',appointment='$appointment',date='$date' where sno='$id'";
$y=mysqli_query($connect,$x);
if($y)
{
echo "done";
}
else
{
echo "not".mysqli_error($connect);
}
}
}
?>