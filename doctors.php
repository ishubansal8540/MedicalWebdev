<?php
session_start();
if(isset($_SESSION['sno']))
{
	$id=$_SESSION['sno'];
echo $id;
}
include("header.php");
?>
<style>
li{
display:inline;
}
table{
position:relative;
left:-10px;
height:49px;
}
td{
border-right:1px solid;
border-color:#b3b3b3;
color:white;
vertical-align:middle;
}
a{
color:black;
}
a:hover{
color:white;
}
td:hover{
background-color:#3399ff;
}
</style>
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
		<!-- main nav -->
						<nav class="main-nav">
							<ul>
								<li>
									<a href="index.html"><i class="fa fa-plus"></i>Home</a>
									<ul>
										<li>
											<a href="index.html">Medical Style</a>
											<ul>
												<li class="text">
													<h2>Main Campus</h2>
													<hr>
													123 Fashion Avenue<br>New York, MO 265984
													<hr>
													203-284-2818<br><a class="__cf_email__" href="http://html.creaws.com/cdn-cgi/l/email-protection" data-cfemail="bfdcd3d6d1d6dcd0ffdbd0d2ded6d191dcd0d2">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>
													<a href="#" class="more"><i class="fa fa-angle-double-right"></i></a>
												</li>
											</ul>
										</li>
										<li><a href="home-news.html">News Style</a></li>
										<li><a href="wellness-home.html">Wellness Style</a></li>
										<li><a href="home-one-page.html">Home Alternative</a></li>
									</ul>
								</li>
								<li>
									<a href="services.html"><i class="fa fa-plus"></i>Services</a>
								</li>
								<li>
									<a href="timetable-week.html"><i class="fa fa-plus"></i>Timetable</a>
									<ul>
										<li><a href="timetable-month.html">Month View</a></li>
										<li><a href="timetable-week.html">Week View</a></li>
										<li><a href="timetable-list.html">List View</a></li>
									</ul>
								</li>
								<li>
									<a href="news-default.html"><i class="fa fa-plus"></i>News</a>
									<ul>
										<li><a href="news-four-columns.html">Four columns</a></li>
										<li><a href="news-three-columns.html">Three columns</a></li>
										<li><a href="news-two-columns.html">Two columns</a></li>
										<li><a href="news-full-width.html">Full width</a></li>
										<li><a href="news-blog-post.html">Blog post</a></li>
									</ul>
								</li>
								<li class="right">
									<a href="index.html" class="active"><i class="fa fa-plus"></i>Features</a>
									<ul>
										<li><a href="widgets.html">Various widgets</a></li>
										<li>
											<a href="#" class="active">Huge number of pages</a>
											<ul>
												<li><a href="about-us.html">About Us</a></li>
												<li><a href="locations.html">Locations</a></li>
												<li><a href="doctors.html" class="active">Our Doctors</a></li>
												<li><a href="full-width-page.html">Full-Width Page</a></li>
												<li><a href="page-with-sidebar.html">Page with Sidebar</a></li>
												<li><a href="page-with-double-sidebar.html">Double Sidebars Page</a></li>
												<li><a href="page-404.html">404 Page</a></li>
												<li><a href="page-pricing-table.html">Pricing tables</a></li>
											</ul>
										</li>
										<li>
											<a href="feature-unlimited-color.html">Unlimited Color Variations</a>
										</li>
										<li><a href="responsive_and_retina_ready.html">Retina Ready & Responsive</a></li>
										<li><a href="features-accordion.html">Styled Content Items</a></li>
									</ul>
								</li>
								<li class="right">
									<a href="photo-gallery.html"><i class="fa fa-plus"></i>Photo Tour</a>
									<ul>
										<li>
											<a href="photo-four-filter.html">Four columns</a>
											<ul>
												<li><a href="photo-four-filter.html">With filter</a></li>
												<li><a href="photo-four.html">Without filter</a></li>
											</ul>
										</li>
										<li>
											<a href="photo-three-filter.html">Three columns</a>
											<ul>
												<li><a href="photo-three-filter.html">With filter</a></li>
												<li><a href="photo-three.html">Without filter</a></li>
											</ul>
										</li>
										<li>
											<a href="photo-two-filter.html">Two columns</a>
											<ul>
												<li><a href="photo-two-filter.html">With filter</a></li>
												<li><a href="photo-two.html">Without filter</a></li>
											</ul>
										</li>
										<li><a href="photo-one.html">One column</a></li>
										<li><a href="photo-single.html">Single item</a></li>
									</ul>
								</li>
								<li>
									<a href="contact.php"><i class="fa fa-plus"></i>Contacts</a>
								</li>
							</ul>
						</nav>
						<!--/ main nav -->
						
						<!-- mobile nav -->
						
						<!--/ mobile nav -->
					</div>
				</div>
			</header>
			<!--/ page header -->
			
			<!-- quick search -->
			

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Our Doctors</h1>
					
				</div>
			</section>
			<!--/ page title -->
			<script src="js/jquery.js"></script>
	
	
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- doctors -->
					<section id="doctors" class="doctors">
		
						<div class="widget-title">Meet Our Team</div>
						<form method="post" onChange="fun();" >
						<select class="filter1" id="dise">
						<?php
						include("admin/connect/db.php");
						$x="select distinct(category) from doctor";
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
$x="select * from doctor";
$a=mysqli_query($connect,$x);		
while($c=mysqli_fetch_array($a))
{
?>				
							<div class="item item1">
								<div class="pic">
									<img src="<?php echo 'admin/doctors_images/'.$c[4];?>" alt="<?php echo $c[1];?>">
									
								</div>
								<h3><a href="view_doctor.php?sno=<?php echo $c[0];?>"><?php echo $c[1];?></a></h3>
								
							</div>
							<?php
							}
							?>
							</div>
							</div>
<div style="position:relative;top:0px">							
<?php
include("footer.php");
?>
</div>