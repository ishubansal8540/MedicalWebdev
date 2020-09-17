<?php
include("../connect/db.php");
$create="create table doctor(sno int(100)not null primary key auto_increment,doctor_name varchar(500),detail varchar(500),image varchar(500),address varchar(500),achievement varchar(400),Contact varchar(300),status int(100))";
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