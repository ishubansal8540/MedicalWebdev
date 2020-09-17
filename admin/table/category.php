<?php
include("../connect/db.php");
$create="create table category(sno int(100)not null primary key auto_increment,name varchar(400))";
$value=mysqli_query($connect,$create);
if($value)
{
echo "Table created";
}
else
{
echo "Table not created".mysqli_error($connect);
}
?>