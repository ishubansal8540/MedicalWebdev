<?php
	include("admin/connect/db.php");
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($con,"select doctorName,sno from doctors where category='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctor_name']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select fees from doctors where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['fees']); ?>"><?php echo htmlentities($row['fees']); ?></option>
  <?php
}
}

?>

