<?php
$cat=$_GET['qs'];
include("admin/connect/db.php");
$x="select * from diseases where category='$cat'";	
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