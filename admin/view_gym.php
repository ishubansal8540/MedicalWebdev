<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("connect/db.php");
echo "<table border='0 px'>";
$x="select * from gym";
echo "<table border='2px black solid' class='table table-hover'>";
echo"<tr>
<th>Catgory</th>
<th>Item</th>
<th>Detail</th>
<th>Image</th>
<th>Price</th>

<th>Edit</th>
<th>Delete</th>
</tr>";

$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo "<tr>";
echo "<td><br><span style='margin-left:10px'>".$c[1]."</span></td>";
echo "<td><br><span style='margin-left:20px'>".$c[2]."</span></td>";
echo "<td><br><span style='margin-left:30px'>".$c[3]."</span></td>";
echo "<td><br><span style='margin-left:0px'>";
?>
<img src="<?php echo '../gym_images/'.$c[4];?>" height='300px' width='150px'>
<?php
echo"</span></td>";
echo "<td><br><span style='margin-left:40px'>".$c[5]."</span></td>";

echo"<td><a href=edit_gym.php?sno=$c[0]>Edit</a></td>";
echo "<td><br><span style='margin-left:60px'><a href=delete_gym.php?sno=$c[0] class='glyphicon glyphicon-trash'></a></span></td>";
echo "</tr>"; 
}
echo "</table>";
?>