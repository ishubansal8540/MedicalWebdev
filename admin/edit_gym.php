<?php
include("connect/db.php");
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];

$a="select * from gym where sno='$sno'";
$b=mysqli_query($connect,$a);
while($c=mysqli_fetch_array($b))
{
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $c[0];?>">
<input type="text" name="cat" value="<?php echo $c[1];?>">
<input type="text" name="item" value="<?php echo $c[2];?>">
<input type="text" name="detail" value="<?php echo $c[4];?>">
<input type="text" name="old" value="<?php echo $c[3];?>">
<input type="file" name="new">
<input type="text" name="price" value="<?php echo $c[5];?>">
<input type="submit" name="smt" value="submit">
</form>
<?php
}
}
if(isset($_POST['smt']))
{
$id=$_POST['id'];
$category=$_POST['cat'];
$item=$_POST['item'];
$detail=$_POST['detail'];
$old_image=$_POST['old'];
$new_image=$_FILES['new']['name'];
$type=$_FILES['new']['type'];
$temp=$_FILES['new']['tmp_name'];
$price=$_POST['price'];
if($new_image=="")
{
$x="update gym set category='$category',item='$item',detail='$detail',image='$old_image',price='$price' where sno='$id'";
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
move_uploaded_file($temp,"../gym_images/".$new_image);
$x="update gym set category='$category',item='$item',detail='$detail',image='$new_image',price='$price' where sno='$id'";
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