					
<br><br><br>
<html>
<head>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="jq.js"></script>
<script src="boostrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
$("input").focus(function(){
$(this).css({"background-color":"lightsteelblue","color":"white"});
});
$("input").blur(function(){
$(this).css({"background-color":"whitesmoke","color":"black"});
});
});
</script>
<script>
function fun() {
str=document.getElementById("dise").value;

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
   xmlhttp.open("GET","demo1.php?qs="+str,true);

  xmlhttp.send();
 
}
</script>
</head>
<body>
<div style="position:absolute;left:500px;background-color:#f7f7f7;height:550px;width:500px;margin-top:80px;">
<form method="post" action="" onsubmit="return vali();">
<table border="0px">
<!--<a href=""><span style="position:relative;top:0px;left:120px">Users questions help?</span></a>-->


<form method="post" onChange="fun();" >
						<select class="filter1" id="dise" name="doc">
						<?php
						include("admin/connect/db.php");
						$x="select distinct(doctor_name) from doctor";
						$y=mysqli_query($connect,$x);
						while($z=mysqli_fetch_array($y))
						{
						?>
							<option><?php echo $z[0];?></option>
						<?php
						}
						?>
							
						</select>
						</form>


<!--<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<span style="position:relative;top:-10px;left:30px">Doctor Name</td><td><br><input type="text" name="doctor" id="doctorname" style="position:relative;top:-20px;left:40px"></td></tr>-->
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<span style="position:relative;top:-15px;left:30px">Patient Name</td><td><br><input type="text" name="patient" id="patientname" style="position:relative;top:-25px;left:40px" required></td></tr>

<?php
$date=1;
echo"<select name='date'  style='position:relative;top:120px;left:-110px' id='date'>";
echo"<option>Date</option>";
while($date<=31)
{
	echo "<option>$date</option>";
	$date++;
}
echo"</select>";

$month=array("month","January","February","March","April","May","June","July","August","September","October","November","December");
echo"<select name='month' value='' style='position:relative;top:120px;left:-110px' id='month'>";
for($m=0;$m<=12;$m++)
{
echo"<option>$month[$m]</option>";
}
echo"</select>";
echo"<select name='year'   style='position:relative;top:120px;left:-110px' id='year'>";
echo"<option>Year</option>";
for($y=2017;$y<=2050;$y++)
{
	echo"<option>$y</option>";
	echo"$y";
}
echo"</select>";

/*$day=array("Day","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
echo"<select name='day' style='position:relative;top:120px;left:-110px'>";
for($b=0;$b<=7;$b++)
{
	echo"<option>$day[$b]</option>";
}
echo"</select>";
*/?>
<br>
<br>
<?php
echo"<select name='time' style='position:relative;top:100px;left:337px'>";
{
echo "<option>11:00am - 01:00pm</option>";
echo "<option>11:00am - 02:00pm</option>";
echo "<option>02:00pm - 03:00pm</option>";
echo "<option>10:00am - 01:00pm</option>";
echo "<option>2:00pm - 4:00pm</option>";
echo "<option>4:00pm - 6:00pm</option>";

}
echo"</select>";
?>
<tr><td><br><input type="submit" name="smt" class="btn btn-danger" value="Book Appointment" style="position:absolute;top:170px;left:170px" onclick="vali()"></td></tr>

<!--
<tr><td><br><input type="submit" name="smt" class="btn btn-primary" value="Submit" span style="margin-left:20px;margin-top:15px;margin-bottom:15px"></td>
<td><br><input type="reset" name="rst" class="btn btn-primary" value="Reset" span style="margin-left:20px;margin-top:15px;margin-bottom:15px"></td></tr> -->
</form>
<a href="index.php"><button class="btn btn-primary">Go to Home Page</button></a>
</div>

<script>
function vali()
{
date=document.getElementById("date").value;
month=document.getElementById("month").value;
year=document.getElementById("year").value;
if(date=="" && month==""&& year=="")
{
alert("Please fill all fields");
return false;
}
else if(date=="")
{
alert("Please choose date");
return false;
}
else if(month=="")
{
alert("Please choose month");
return false;
}
else if(year=="")
{
alert("Please choose year");
return false;
}

}
</script>

<?php
if(isset($_POST['smt']))
{

$name=$_POST['doc'];

$appointment=$_POST['time'];
$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$patient_name=$_POST['patient'];
if($appointment='11:-00am-1:00pm'>2)
{
	echo"no appointment";
}
else
{
	echo"booked..";
}
include("admin/connect/db.php");
$insert="Insert into user_appointment(doctor_name,appointment_time,appointment_date,username,status) values('$name','$appointment','$date-$month-$year','$patient_name',1)";
$value=mysqli_query($connect,$insert);
if($value)
{
echo "<script>alert('Your data inserted successfully')</script>";
?>
<script>window.location="index.php";</script>
<?php
}
else
{
echo "<script>alert('Oops something went wrong')</script>".mysqli_error($connect);
}
}
?>
<br><br><br><br><br><br><br><br><br><br>
