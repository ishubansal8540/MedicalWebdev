<?php
$user=$_COOKIE['username'];
$pass=$_COOKIE['password'];
setcookie("username","$user",time()-4*24*3600);
setcookie("password","$pass",time()-4*24*3600);
header("location:user.php");
?>