<?php
include("../connect/db.php");
$create="create table appointment(sno int(100)not null primary key auto_increment,doctor_name varchar(500),appointment varchar(500),date varchar(500),status int(100))";
$value=mysqli_query($connect,$create);
if($value)
{
echo "Table created";
}
else
{
echo "Table is not created".mysqli_error($connect);
}
?>