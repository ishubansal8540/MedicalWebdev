<?php
include("../connect/db.php");
$x="create table notice(sno int(100)not null primary key auto_increment,name varchar(500),detail varchar(500),current varchar(300),image varchar(400),status int(100))";
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