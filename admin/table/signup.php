<?php
include("../connect/db.php");
$create="create table signup(sno int(100)not null primary key auto_increment,username varchar(500),password varchar(500),confirm_password varchar(500),gender varchar(500),contact varchar(400),status int(100))";
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