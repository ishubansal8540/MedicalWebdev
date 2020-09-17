<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("connect/db.php");

$x="select * from category";
$y=mysqli_query($connect,$x);
echo"<marquee direction='left' behavior='alternate'><b><font size='6px' color='skyblue'>Your Uploaded Categories Are</font></b></marquee>";
echo "<table border='2px black solid' style='margin-left:60px;margin-top:40px' width='50%'>";
echo"<tr>
<th>Category</th>

<th>Edit</th>
<th><span style='position:relative;left:10px;'>Delete</span></th>
</tr>";
while($c=mysqli_fetch_array($y))
{
echo "<tr>";
echo "<td><br><span style='margin-left:20px'>".$c[1]."</span></td>";


echo"<td><a href=edit_category.php?sno=$c[0]>Edit</a></td>";
echo "<td><br><span style='margin-left:40px'><a href=delete_category.php?sno=$c[0] class='glyphicon glyphicon-trash'></a></span></td>";
echo "</tr>"; 
}
echo "</table>".mysqli_error($connect);
?>

