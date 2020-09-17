
<?php
session_start();
include("header.php");
?>
<!-- mobile nav -->
						<nav id="mobile-main-nav" class="mobile-main-nav">
							<i class="fa fa-bars"></i><a href="#" class="opener">Navigation</a>
							<ul>
								<li>
									<i></i><a href="index.html" class="active">Home</a>
									<ul>
										<li>
											<i></i><a href="index.html">Medical Style</a>
											<ul>
												<li class="text">
													<h2>Main Campus</h2>
													<hr>
													<p>123 Fashion Avenue<br>New York, MO 265984</p>
													<hr>
													<p>203-284-2818<br><a class="__cf_email__" href="http://html.creaws.com/cdn-cgi/l/email-protection" data-cfemail="f7949b9e999e9498b793989a969e99d994989a">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></p>
													<a href="#" class="more fa fa-angle-double-right"></a>
												</li>
											</ul>
										</li>
										<li><a href="home-news.html">News Style</a></li>
										<li><a href="wellness-home.html">Wellness Style</a></li>
										<li><a href="home-one-page.html">Home Alternative</a></li>
									</ul>
								</li>
								<li>
									<a href="services.html">Servives</a>
								</li>
								<li>
									<i></i><a href="timetable-week.html">Timetable</a>
									<ul>
										<li><a href="timetable-month.html">Month View</a></li>
										<li><a href="timetable-week.html">Week View</a></li>
										<li><a href="timetable-list.html">List View</a></li>
									</ul>
								</li>
								<li>
									<i></i><a href="news-default.html">News</a>
									<ul>
										<li><a href="news-four-columns.html">Four columns</a></li>
										<li><a href="news-three-columns.html">Three columns</a></li>
										<li><a href="news-two-columns.html">Two columns</a></li>
										<li><a href="news-full-width.html">Full width</a></li>
										<li><a href="news-blog-post.html">Blog post</a></li>
									</ul>
								</li>
								<li>
									<i></i><a href="index.html">Features</a>
									<ul>
										<li><a href="widgets.html">Various widgets</a></li>
										<li>
											<i></i><a href="#">Huge number of pages</a>
											<ul>
												<li><a href="about-us.html">About Us</a></li>
												<li><a href="locations.html">Locations</a></li>
												<li><a href="doctors.html">Our Doctors</a></li>
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
								<li>
									<i></i><a href="photo-gallery.html">Photo Tour</a>
									<ul>
										<li>
											<i></i><a href="photo-four-filter.html">Four columns</a>
											<ul>
												<li><a href="photo-four-filter.html">With filter</a></li>
												<li><a href="photo-four.html">Without filter</a></li>
											</ul>
										</li>
										<li>
											<i></i><a href="photo-three-filter.html">Three columns</a>
											<ul>
												<li><a href="photo-three-filter.html">With filter</a></li>
												<li><a href="photo-three.html">Without filter</a></li>
											</ul>
										</li>
										<li>
											<i></i><a href="photo-two-filter.html">Two columns</a>
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
									<a href="contacts.html">Contacts</a>
								</li>
							</ul>
						</nav>
						<!--/ mobile nav -->
					</div>
				</div>
			</header>
			<!--/ page header -->
			
			<!-- quick search -->
			<form id="quick-search" class="quick-search">
				<fieldset>
					<legend>Quick Search:</legend>
					
					<input type="text" placeholder="Search by name" id="docname" name="docname" class="ui-autocomplete-input" autocomplete="off">
					
					<select>
						<option value="0">Speciality</option>
						<option value="1">Ophthomologist</option>
						<option value="2">Dermatologist</option>
						<option value="3">Neorologist</option>
						<option value="4">Surgeon</option>
					</select>
					
					<select>
						<option value="0">Locations</option>
						<option value="1">Primary Health Care</option>
						<option value="2">Gynaecological Clinic</option>
						<option value="3">Diagnosis With Precise</option>
						<option value="4">Cardiac Clinic</option>
						<option value="5">General Surgery</option>
					</select>
					
					<button type="submit">Search</button>
					<div class="switcher">
						<button id="quick-search-switcher" type="button">Find a doctor</button>
					</div>
				</fieldset>				
			</form>
			<!--/ quick search -->

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Photo Tour</h1>
					
					<nav class="bread-crumbs">
						<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="photo-gallery.html">Photo Tour</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Single Item</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<!-- photo tour -->
						<section class="widget photo-tour photo-tour-1">	
							<div class="widget-title">Primary Health Care </div>
																	
							<div class="grid clearfix">
							<?php
							 if (isset($_GET["sno"]))
	{ 
 if (isset($_SESSION["id"]))
	{
		$sno=$_GET["sno"];
		$id=$_SESSION["id"];
		echo $id;

							$item_name="";
include("admin/connect/db.php");							
$sno=$_GET['sno'];
$query="select * from gym where sno='$sno'";
$res=mysqli_query($connect,$query);		
while($c=mysqli_fetch_array($res))
		{
		?>				
								<div class="item item2">
									<div class="pic">
							<img src="<?php echo 'gym_images/'.$c[4];?>" alt="<?php echo $c[1];?>" height="10px" width="10px">
							
									</div>
									
									</div>
							</div>
							<?php
							echo "<td><a href=cart2.php?x=$c[0]>Add to Cart</a></td>";
		}
							?>
						</section>
						<!--/ photo tour -->
						<!-- details -->
						<!--section class="widget widget-details">
						
						<div class="widget-title"></div>
							<?php /*echo $c['category']."<br>";?>
							<?php echo $c['item']."<br>";?>
							<?php echo $c['detail']."<br>";?>
						    Rs.<?php echo $c['price']."<br>";*/?></span>
						<?php 
						//if(isset($_SESSION['name']))
						//{
						?>
						<form method="get" action="cart.php">
					
						<input type="hidden" name="it" value="<?php //echo $c[2];?>">
						<input type="hidden" name="price" value="<?php// echo $c[5];?>">
						
						<input type="submit" name="s" value="Buy Now"-->
						<?php
						
						//}
						/*else
						{
						?>
						<form method="get" action="login.php">
						
						<input type="hidden" name="it" value="<?php echo $c[2];?>">
						<input type="hidden" name="price">
						<input type="submit" name="s" value="Buy Now">
						<?php
						}*/
						?>
						
								<?php
	}}
								?>
									<div class="text">
						
						</div>
						</section>
						<!--/ details -->
					</div>
				</div>				
				<div class="grid-row-sep"></div>				
				<div class="grid-row">										
				</div>
			</main>
			<!-- scripts -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.migrate.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
		<script type="text/javascript" src="js/jquery.flot.js"></script>
		<script type="text/javascript" src="js/jquery.flot.pie.js"></script>
		<script type="text/javascript" src="js/jquery.flot.categories.js"></script>
		<script type="text/javascript" src="js/greensock.js"></script>
		<script type="text/javascript" src="js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>

	<!-- Superscrollorama -->		
		<script type="text/javascript" src="js/jquery.superscrollorama.js"></script>
		<script type="text/javascript" src="js/TweenMax.min.js"></script>
		<script type="text/javascript" src="js/TimelineMax.min.js"></script>
	<!--/ Superscrollorama -->
	
		<script type="text/javascript" src="js/jquery.ui.core.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
		<script type="text/javascript" src="js/jquery.ui.accordion.min.js"></script>
		<script type="text/javascript" src="js/jquery.tweet.js"></script>
	<!-- EASYPIECHART -->
		<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
	<!--/ EASYPIECHART -->
		<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<!--/ scripts -->
		
		<!-- tuner -->
		<script src="tuner/js/scripts.js"></script>
		<div id="tuner" class="tuner">
			<label>Theme Colors</label>
			<ul class="colors">
				<li data-color="blue" class="color-blue active"><span></span></li>
				<li data-color="green" class="color-green"><span></span></li>
				<li data-color="pink" class="color-pink"><span></span></li>
				<li data-color="cyan" class="color-cyan"><span></span></li>
				<li data-color="orange" class="color-orange"><span></span></li>
				<li data-color="purple" class="color-purple"><span></span></li>
			</ul>
			<label>Layout Styles</label>
			<ul class="layouts">
				<li data-layout="boxed">Boxed</li>
				<li data-layout="widescreen" class="active">Widescreen</li>
			</ul>
			<i id="tuner-switcher" class="fa fa-cogs"></i>
		</div>
		<!--/ tuner -->
		
	</body>

<!-- Mirrored from html.creaws.com/clinico/photo-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 05:21:12 GMT -->
</html>
			<?php
			include("footer.php");
			?>
