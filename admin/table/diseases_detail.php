<?php
@mysql_connect("localhost","root","");
@mysql_select_db("medicare");
$create="create table diseases_detail(sno int(100)not null primary key auto_increment,category varchar(500),sub_category varchar(500),diseases_name varchar(500),detail varchar(500),image varchar(500),causes varchar(500),prevention varchar(400))";
$value=@mysql_query($create);
if($value)
{
echo "Table created";
}
else
{
echo "Table is not created".@mysql_error();
}
?>