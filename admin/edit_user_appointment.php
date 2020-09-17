<?php
include("connect/db.php");
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];

$a="select * from user_appointment where sno='$sno'";
$b=mysqli_query($connect,$a);
while($c=mysqli_fetch_array($b))
{
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $c[0];?>">
<input type="text" name="dname" value="<?php echo $c[1];?>">

<input type="text" name="appointment_time" value="<?php echo $c[2];?>">
<input type="text" name="appointment_date" value="<?php echo $c[3];?>">
<input type="text" name="pname" value="<?php echo $c[4];?>">
<input type="submit" name="smt" value="submit">
</form>
<?php
}
}
if(isset($_POST['smt']))
{
$id=$_POST['id'];
$doctor_name=$_POST['dname'];
$appointment_time=$_POST['appointment_time'];
$appointment_date=$_POST['appointment_date'];
$patient_name=$_POST['pname'];

if($doctor_name=="")
{
$x="update user_appointment set doctor_name='$doctor_name',appointment_time='$appointment_time',appointment_date='$appointment_date',username='$patient_name' where sno='$id'";
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
$x="update user_appointment set doctor_name='$doctor_name',appointment_time='$appointment_time',appointment_date='$appointment_date',username='$patient_name' where sno='$id'";
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