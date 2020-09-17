<?php
include("../connect/db.php");
$create="create table cart(sno int(100)not null primary key auto_increment,item varchar(500),detail varchar(500),price varchar(500),username varchar(500),username_time varchar(400),total varchar(100))";
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