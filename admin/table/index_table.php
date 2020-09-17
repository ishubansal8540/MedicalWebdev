<?php
include("../connect/db.php");
$x="create table index(username varchar(500),password varchar(500))";
$y=mysqli_query($connect,$x);
if($y)
{
echo "Table created";
}
else
{
echo "Table not created".mysqli_error($connect);

}
?>