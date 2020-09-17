<?php
include("../connect/db.php");
$create="create table contact_us(sno int(100)not null primary key auto_increment,username varchar(500),email_id varchar(500),address varchar(2000),contact varchar(400),message varchar(5000),status int(100))";
$value=mysqli_query($connect,$create);
if($value)
{
echo "Table is created";
}
else
{
echo "Table not created".mysqli_error($connect);
}
?>