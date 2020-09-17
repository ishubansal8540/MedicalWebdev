<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("connect/db.php");

$x="select * from doc_hm";
echo "<table border='2px' class='table table-hover'>";
echo"<tr>
<th>Specialization</th>
<th>Doctor Name</th>
<th>Address</th>
<th>Doctor Fees</th>
<th>Contact</th>
<th>Email Id</th>
<th>Password</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo "<tr>";
echo "<td><br><span style='margin-left:10px'>".$c[1]."</span></td>";
echo "<td><br><span style='margin-left:40px'>".$c[2]."</span></td>";
echo "<td><br><span style='margin-left:40px'>".$c[3]."</span></td>";
echo "<td><br><span style='margin-left:60px'>".$c[4]."</span></td>";
echo "<td><br><span style='margin-left:70px'>".$c[5]."</span></td>";
echo "<td><br><span style='margin-left:70px'>".$c[6]."</span></td>";
echo "<td><br><span style='margin-left:70px'>".$c[7]."</span></td>";
echo"<td><a href=edit_doctor.php?sno=$c[0]>Edit</a></td>";
echo "<td><br><span style='margin-left:75px'><a href=delete_doctor.php?sno=$c[0] class='glyphicon glyphicon-trash'></a></span></td>";
echo "</tr>"; 
}
echo "</table>";
?>