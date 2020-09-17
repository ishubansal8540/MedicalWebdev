<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("connect/db.php");
echo "<table border='0px'>";
$x="select * from contact_us";
echo "<table border='2px black solid' width='50%'>";
echo"<tr>
<th>Name</th>
<th>EmailId</th>
<th>Address</th>
<th>contact</th>
<th>Message</th>

<th>Delete</th>
</tr>";
$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo "<tr>";
echo "<td><br><span style='margin-left:10px'>".$c[1]."</span></td>";
echo "<td><br><span style='margin-left:20px'>".$c[2]."</span></td>";
echo "<td><br><span style='margin-left:30px'>".$c[3]."</span></td>";
echo "<td><br><span style='margin-left:40px'>".$c[4]."</span></td>";
echo "<td><br><span style='margin-left:50px'>".$c[5]."</span></td>";


echo "<td><br><span style='margin-left:70px'><a href=delete_contact_us.php?sno=$c[0]  class='glyphicon glyphicon-trash'></a></span></td>";
echo "</tr>"; 
}
echo "</table>";
?>