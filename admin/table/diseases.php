<?php
include("../connect/db.php");
$create="create table diseases(sno int(100) not null primary key auto_increment,category varchar(400),sub_category varchar(400),diseases_name varchar(400),detail varchar(5000),image varchar(500),causes varchar(2000),symptoms varchar(2000),prevention varchar(2000),medicine varchar(2000),username varchar(500),status int(100))";    
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