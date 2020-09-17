<?php
include("../connect/db.php");
$create="create table gym(sno int(100)not null primary key auto_increment,category varchar(500),item varchar(500),detail varchar(500),image varchar(500),price varchar(400),status int(100))";
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