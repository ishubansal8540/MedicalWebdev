<?php
session_start();
session_destroy();
$u=$_COOKIE['username'];
$p=$_COOKIE['pass'];
setcookie("username",$u,time()-1*31*24*60*60);
setcookie("password",$p,time()-1*31*24*60*60);
header("location:index.php");
?>