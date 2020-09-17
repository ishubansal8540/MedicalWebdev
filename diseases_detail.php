<?php
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
   xmlhttp.open("GET","demo.php?qs="+str,true);

  xmlhttp.send();
 
}
</script>
		<!-- main nav -->
						
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
						$x="select distinct(category) from diseases";
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
include("admin/connect/db.php");
$x="select * from diseases";	
$a=mysqli_query($connect,$x);	
while($c=mysqli_fetch_array($a))
{
?>				
							<div class="item item1">
								<div class="pic">
									<img src="<?php echo 'admin/diseases_images/'.$c[5];?>" alt="<?php echo $c[3];?>">
									
								</div>
								<h3><a href="view_diseases_detail.php?sno=<?php echo $c[0];?>"><?php echo $c[3];?></a></h3>
								
							</div>
							<?php
							}
							?>
							
						</div>
							</div>
<div style="position:relative;top:400px">							
<?php
include("footer.php");
?>
</div>
						