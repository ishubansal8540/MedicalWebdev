<?php
$a=mysql_connect("localhost","root","");
if($a)
{
echo "Database is connected";
}
else
{
echo "Database is not connected";
}
$d="create database medicare";
$f=mysql_query($d);
if($f)
{
echo "Database created";
}
else
{
echo "Database not created".mysql_error();
}
?>