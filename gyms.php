<?php
session_start();
 if (!isset($_SESSION["id"]))
 {
	 echo"<script>alert('Login First');</script>";
	 header("location:login1.php");
 }
 else
 {
	if(isset($_SESSION['id']))
	{
		$id=$_SESSION['id'];
             echo $id;
	}
include("header.php");
?>
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
   xmlhttp.open("GET","demo3.php?qs="+str,true);

  xmlhttp.send();
 
}
</script>
		<!-- main nav -->
						<!--/ mobile nav -->
					</div>
				</div>
			</header>
			<!--/ page header -->
			
			<!-- quick search -->
			
			<!--/ quick search -->

			<!-- page title -->
			
			<!--/ page title -->
	
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- doctors -->
					<section id="doctors" class="doctors">
					<div style="position:relative;top:90px">
						<div class="widget-title">Meet Our Team</div>
						<form method="post" onChange="fun();" >
						<select class="filter1" id="dise">
						<?php
						include("admin/connect/db.php");
						$x="select distinct(category) from gym";
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
						<div class="grid" id="txtHint" style="border:hidden;position:absolute;top:50px">
<?php
 if (isset($_SESSION["id"]))
	{
		$id=$_SESSION["id"];
		echo $id;
include("admin/connect/db.php");
$x="select * from gym";
$a=mysqli_query($connect,$x);		
while($c=mysqli_fetch_array($a))
{
?>				
							<div class="item item1">
								<div class="pic">
									<img src="<?php echo 'gym_images/'.$c[4];?>" alt="<?php echo $c[1];?>">
									
								</div>
								<h3><a href="view_gymmaterial.php?sno=<?php echo $c[0];?>"><?php echo $c[1];?></a></h3>
								
							</div>
							<?php
	}}
							?>
							</div>
							</div>
<div style="position:relative;top:400px">							
<?php
include("footer.php");
 }
?>
</div>