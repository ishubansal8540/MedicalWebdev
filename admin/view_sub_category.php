<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("connect/db.php");
echo "<table border='0px'>";
$x="select * from sub_category";
echo "<table border='2px black solid' width='50%'>";
echo"<tr>
<th>Category_name</th>
<th>Sub_catgeory</th>

<th>Edit</th>
<th>Delete</th>
</tr>";

$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo "<tr>";
echo "<td><br><span style='margin-left:10px'>".$c[1]."</span></td>";
echo "<td><br><span style='margin-left:20px'>".$c[2]."</span></td>";

echo"<td><a href=edit_sub_category.php?sno=$c[0]>Edit</a></td>";
echo "<td><br><span style='margin-left:30px'><a href=delete_sub_category.php?sno=$c[0] class='glyphicon glyphicon-trash'></a></span></td>";
echo "</tr>"; 
}
echo "</table>";
?>