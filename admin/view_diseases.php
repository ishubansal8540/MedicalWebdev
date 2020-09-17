<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("connect/db.php");

echo "<table class='table table-striped' border='2px'>";
echo"<tr>
<th>Category</th>
<th>Sub category</th>
<th>Diseases Name</th>
<th>Detail</th>
<th>Image</th>
<th>Symptoms</th>
<th>Causes</th>
<th>Prevention</th>
<th>Medicine</th>
<th>Username</th>

<th>Edit</th>
<th><span style='position:relative;left:10px;'>Delete</span></th>
</tr>";

$x="select * from diseases";


$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo "<tr>";
echo "<td><br><span style='margin-left:10px'>".$c[1]."</span></td>";
echo "<td><br><span style='margin-left:20px'>".$c[2]."</span></td>";
echo "<td><br><span style='margin-left:30px;'>".$c[3]."</span></td>";
echo "<td><br><span style='margin-left:40px'>".$c[4]."</span></td>";
echo "<td><br><span style='margin-left:0px'>";?>
<img src="<?php echo 'diseases_images/'.$c[5];?>" height='500px' width='150px'>
<?php
echo "</span></td>";
echo "<td><br><span style='margin-left:60px'>".$c[6]."</span></td>";
echo "<td><br><span style='margin-left:70px'>".$c[7]."</span></td>";
echo "<td><br><span style='margin-left:70px'>".$c[8]."</span></td>";
echo "<td><br><span style='margin-left:70px'>".$c[9]."</span></td>";
echo "<td><br><span style='margin-left:70px'>".$c[10]."</span></td>";

echo"<td><a href=edit_diseases.php?sno=$c[0]>Edit</a></td>";
echo "<td><br><span style='margin-left:80px'><a href=delete_diseases.php?sno=$c[0] class='glyphicon glyphicon-trash'></a></span></td>";
echo "</tr>"; 
}
echo "</table>";
?>