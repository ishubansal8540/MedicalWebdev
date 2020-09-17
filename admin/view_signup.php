<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<?php
include("connect/db.php");
echo "<table border='0px'>";
$x="select * from signup";
$y=mysqli_query($connect,$x);
echo"<marquee direction='left' behavior='alternate'><b><font size='6px' color='skyblue'>Your Uploaded Categories Are</font></b></marquee>";
echo "<table border='2px black solid' style='margin-left:60px;margin-top:40px' width='50%'>";
echo"<tr>
<th>Name</th>
<th>Password</th>
<th>Confirm Password</th>
<th>Gender</th>
<th>Contact</th>

<th>Delete</th>
</tr>";

$y=mysqli_query($connect,$x);
while($c=mysqli_fetch_array($y))
{
echo "<tr>";
echo "<td><br><span style='margin-left:10px'>".$c[1]."</span></td>";
echo "<td><br><span style='margin-left:40px'>".$c[2]."</span></td>";
echo "<td><br><span style='margin-left:50px'>".$c[3]."</span></td>";
echo "<td><br><span style='margin-left:60px'>".$c[4]."</span></td>";
echo "<td><br><span style='margin-left:70px'>".$c[5]."</span></td>";

echo "<td><br><span style='margin-left:75px'><a href=delete_signup.php?sno=$c[0] class='glyphicon glyphicon-trash'></a></span></td>";
echo "</tr>"; 
}
echo "</table>";
?>