<?php
include("connect/db.php");
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];

$a="select * from diseases where sno='$sno'";
$b=mysqli_query($connect,$a);
while($c=mysqli_fetch_array($b))
{
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $c[0];?>">
<input type="text" name="cat" value="<?php echo $c[1];?>">
<input type="text" name="subcat" value="<?php echo $c[2];?>">
<input type="text" name="diseases_name" value="<?php echo $c[3];?>">
<input type="text" name="detail" value="<?php echo $c[4];?>">
<input type="text" name="old_image" value="<?php echo $c[5];?>" readonly>
<input type="file" name="new">
<input type="text" name="symptoms" value="<?php echo htmlentities($c[6]);?>">
<input type="text" name="causes" value="<?php echo htmlentities($c[7]);?>">
<input type="text" name="prevention" value="<?php echo htmlentities($c[8]);?>">
<input type="text" name="medicine" value="<?php echo htmlentities($c[9]);?>">
<input type="submit" name="smt" value="submit">
</form>
<?php
}
}
if(isset($_POST['smt']))
{
$id=$_POST['id'];
$cat=$_POST['cat'];
$sub_cat=$_POST['subcat'];
$diseases_name=$_POST['diseases_name'];
$detail=$_POST['detail'];
$old_image=$_POST['old_image'];
$new_image=$_FILES['new']['name'];
$type=$_FILES['new']['type'];
$temp=$_FILES['new']['tmp_name'];
$causes=$_POST['causes'];
$symptoms=$_POST['symptoms'];
$prevention=$_POST['prevention'];
$medicine=$_POST['medicine'];
if($new_image=="")
{
$x="update diseases set category='$cat',sub_category='$sub_cat',diseases_name='$diseases_name',detail='$detail',image='$old_image',causes='$causes',
symptoms='$symptoms',prevention='$prevention',medicine='$medicine' where sno='$id'";
$y=mysqli_query($connect,$x);
if($y)
{
echo "done";
}
else
{
echo "not".mysql_error($connect);
}
}
else
{
move_uploaded_file($temp,"diseases_images/".$new_image);
$x="update diseases set category='$cat',sub_category='$sub_cat',diseases_name='$diseases_name',detail='$detail',image='$new_image',causes='$causes',
symptoms='$symptoms', prevention='$prevention',medicine='$medicine' where sno='$id'";
$y=mysqli_query($connect,$x);
if($y)
{
echo "done";
}
else
{
echo "not".mysql_error($connect);
}
}
}
?>