<?php
include("connect/db.php");
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];

$a="select * from sub_category where sno='$sno'";
$b=mysqli_query($connect,$a);
while($c=mysqli_fetch_array($b))
{
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $c[0];?>">
<input type="text" name="cat" value="<?php echo $c[1];?>">
<input type="text" name="subcat" value="<?php echo $c[2];?>">
<input type="submit" name="smt" value="submit">
</form>
<?php
}
}
if(isset($_POST['smt']))
{
$id=$_POST['id'];
$cat=$_POST['cat'];
$subcat=$_POST['subcat'];
if($cat=="")
{
$x="update sub_category set category_name='$cat' and sub_category='$subcat'  where sno='$id'";
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
$x="update sub_category set category_name='$cat' and sub_category='$subcat' where sno='$id'";
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