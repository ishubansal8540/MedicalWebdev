<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
$sno=$_GET['id'];
$category=$_GET['catname'];
$sub_category=$_GET['subcategory'];
?>
<form method="post" action="">
Update Category<input type="text" name="cat" value="<?php echo $category;?>"><p><p>
Update Sub Category<input type="text" name="subcat" value="<?php echo $sub_category;?>">
<input type="submit" name="smt" value="submit" class="btn btn-primary">
<input type="reset" name="reset" value="Reset" class="btn btn-primary">
</form>
<?php
if(isset($_POST['smt']))
{
$cat=$_POST['cate'];
include("connect/db.php");
$a="Update category set name='$cat' where sno='$sno'";
$b=mysqli_query($connect,$a);
if($b)
{
header("location:view_catgory.php");
}
else 
{
echo "<script>alert('Your changed data is successfully inserted')</script>".mysqli_error($connect);
}
}
?>