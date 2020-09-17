<?php

$con = new mysqli("localhost", "root", "", "medicare");
if ($con->connect_errno) {
   die("Database selection failed: " . mysqli_error());
}
?>