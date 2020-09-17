<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("admin/connect/db.php");
echo "<table border='0 px'>";
$x="select * from appointment";
$y=mysqli_query($connect,$x);
echo"<marquee direction='left' behavior='alternate'><b><font size='6px' color='skyblue'>Your Uploaded Categories Are</font></b></marquee>";
echo "<table border='2px black solid' style='margin-left:60px;margin-top:40px' width='50%'>";
echo"<tr>
<th>Doctor Name</th>
<th>Appointment Date</th>
<th>Time</th>

<th>Status</th>
<th>Appointment Fixed/Appointment Not Fixed</th>
<th>Edit</th>

<th><span style='position:relative;left:10px;'>Delete</span></th>
</tr>";

$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo "<tr>";
echo "<td><br><span style='margin-left:10px'>".$c[1]."</span></td>";
echo "<td><br><span style='margin-left:10px'>".$c[2]."</span></td>";
echo "<td><br><span style='margin-left:10px'>".$c[3]."</span></td>";

if($c['status']==0)
{
echo "<td>Appointment Fixed</td>";
}
else
{
echo "<td>Appointment Not Fixed</td>";
}
if($c['status']==0)
{
echo "<td><a href=admin/status_appointment.php?st=$c[0]>Appointment Not Fixed</a></td>";
}
else
{
echo "<td><a href=admin/status_appointment.php?st=$c[0]>Appointment Fixed</a></td>";
}
echo"<td><a href=edit_appointment.php?sno=$c[0]>Edit</a></td>";
echo "<td><br><span style='margin-left:60px'><a href=admin/delete_appointment.php?sno=$c[0] class='glyphicon glyphicon-trash'></a></span></td>";
echo "</tr>"; 
}
echo "</table>";
?>