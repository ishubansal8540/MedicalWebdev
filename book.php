<?php
include("admin/connect/db.php");
?>
<form method="post" action="payment.php">
<input type="submit" name="smt" style="position:absolute;top:200px;left:200px" class="button" value="Pay Now">
</form>
<?php
$time=$_POST['app'];
$doctor_name=$_POST['doctor'];

/*	$d=$_POST['date'];
	$m=$_POST['month'];
	$y=$_POST['year'];
	$dy=$_POST['day'];
	$t=$_POST['time']; */
 $x="select * from appointment where doctor_name='$doctor_name' and date='$time'"; 
$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y)) 

{

 echo $c[1];
  echo $c[2];
}
/*
if($c)
{
echo "done";
}
else
{
echo"not".@mysql_error();
} */
?>