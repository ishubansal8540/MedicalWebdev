<?php
include("../connect/db.php");
$create="create table admin(sno int(100) not null primary key auto_increment,user varchar(400),password varchar(500))";
$value=mysqli_query($connect,$create);
if($value)
{
echo "table created";
}
else
{
echo "Table not created".mysqli_error($connect);
}
?>