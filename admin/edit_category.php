<?php
include("connect/db.php");
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];

$a="select * from category where sno='$sno'";
$b=mysqli_query($connect,$a);
while($c=mysqli_fetch_array($b))
{
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $c[0];?>">
<input type="text" name="cat" value="<?php echo $c[1];?>">
<input type="submit" name="smt" value="submit">
</form>
<?php
}
}
if(isset($_POST['smt']))
{
$id=$_POST['id'];
$cat=$_POST['cat'];
if($cat=="")
{
$x="update category set name='$cat' where sno='$id'";
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
$x="update category set name='$cat' where sno='$id'";
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