<?php
include("../connect/db.php");
$x="create table appointment_fixed(sno int(100)not null primary key auto_increment,username varchar(500),current varchar(500),doctor_name varchar(300),contact varchar(400),email int(100),address varchar(100))";
$y=mysqli_query($connect,$x);
if($y)
{
echo "Table is created";
}
else
{
echo "Table not created".mysqli_error($connect);
}
?>