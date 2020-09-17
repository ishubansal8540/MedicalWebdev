<?php
session_start();
include 'connection.php';
$name = date('YmdHis');
$newname="images/".$name.".jpg";
$file = file_put_contents( $newname, file_get_contents('php://input') );
echo $file;
if (!$file) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}
else
{
	mysql_select_db("php_class");
    $sql="Insert into signup(name,email_id) values('$newname','abc')";
    $result=mysqli_query($con,$sql)
            or die("Error in query");
    $value=mysqli_insert_id($con);
    $_SESSION["myvalue"]=$value;
}

$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $newname;
print "$url\n";

?>
