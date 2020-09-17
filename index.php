<?php
include("header.php");
?>
	

	<body>
		<div class="page">	
		<div class="sticky-wrapp">
		<div class="sticky-container">
						<!-- mobile nav -->
						
			<!-- slider -->
			<div class="slider-wrapper">
				<section class="slider" id="slider">
					<div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">					
						<img src="pic/medical-slide-1.jpg" alt="" class="ls-bg">
						
						
					</div>
					<div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">				
						<img src="pic/medical-slide-2.jpg" alt="" class="ls-bg">
						
					
					</div>
					
				</section>
			</div>
			<!--/ slider -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- benefits -->
					<section class="benefits">
						<ul>
							
							
							<li>
								<div class="pic"><i class="fa fa-stethoscope"></i></div>
								<div class="text">
									<h2>Symptom Check</h2>
									<p>You can easily check your symptoms,its causes and its prevention.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-comments-o"></i></div>
								<div class="text">
									<h2>Online Help</h2>
									<p>You can Also take  online help with 24*7 services.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
						</ul>
					</section>
					<!--/ benefits -->
				</div>
				
				<div class="grid-row">
					<!-- services -->
					<section class="services">
						<ul>
							<li>
								<a class="pic"><i class="fa fa-leaf"></i></a>
								<h2><a href="#">Our Services</a></h2>
								<p>You may call them simply doctors. But most doctors have extra expertise in one type of medicine or another. In fact, there are several hundred medical specialties and subspecialties. Here are the most common types of doctors you'll likely see.</p>
								<a href="#" class="more fa fa-long-arrow-right"></a>
							</li>
							<li>
								<a class="pic"><i class="fa fa-user-md"></i></a>
								<div class="text">
									<h2><a href="#">Qualified Doctors</a></h2>
									<p>They’re experts on the heart and blood vessels. You might see them for heart failure, a heart attack, high blood pressure, or an irregular heartbeat.</p>
									<a href="#" class="more fa fa-long-arrow-right"></a>
								</div>
							</li>
							<li>
								<a class="pic"><i class="fa fa-clock-o"></i></a>
								<h2><a href="#">24 Hours Service</a></h2>
								<p>If you have a health concern and can’t reach a doctor right away, or you’re not sure where else to call, you can call our Medical Help Line 24 hours a day.</p>
								<a href="#" class="more fa fa-long-arrow-right"></a>
							</li>
							<li>
								<a class="pic"><i class="fa fa-ambulance"></i></a>
								<div class="text">
									<h2><a href="#">Patient Reviews</a></h2>
									<p>We believed, too, in the doctors and the medicine and the surgeries--We believed in that. We believed in them. We believed in the hard currency of his intelligence and his research..</p>
									<a href="#" class="more fa fa-long-arrow-right"></a>
								</div>
							</li>
						</ul>
					</section>
					<!--/ services -->	
				</div>
				
				<div class="grid-row">
						<section class="widget doctors-carousel doctors">
						<div class="widget-title">Our Doctors</div>
						<div id="doctors-carousel" class="owl-carousel">
				<?php
include("admin/connect/db.php");
$x="select * from doctor";
$a=mysqli_query($connect,$x);		
while($c=mysqli_fetch_array($a))
{
?>
					<!-- doctors carousel -->
			
							<div class="item">
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
					</section>
					<!--/ doctors carousel -->
				</div>
				
				<div class="grid-row">
					<div class="grid-col grid-col-4">
						<!-- departments -->
						<section class="widget widget-departments">
							<div class="widget-title">Departments</div>
							<dl>
							
								<dt><i class="fa fa-stethoscope"></i>Anesthesiologists</dt>
								<dd>These doctors give you drugs to numb your pain or to put you under during surgery, childbirth, or other procedures. They monitor your vital signs while you’re under anesthesia..<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
								<dt><i class="fa fa-heart"></i>Family Physicians</dt>
								<dd>They care for the whole family, including children, adults, and the elderly. They do routine checkups and screening tests, give you flu and immunization shots, and manage diabetes and other ongoing medical conditions..<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
								<dt><i class="fa fa-scissors"></i>Dermatologists</dt>
								<dd>Have problems with your skin, hair, nails? Do you have moles, scars, acne, or skin allergies? Dermatologists can help.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
								<dt class="opened"><i class="fa fa-wheelchair"></i>Cardiologists</dt>
								<dd>They’re experts on the heart and blood vessels. You might see them for heart failure, a heart attack, high blood pressure, or an irregular heartbeat..<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
							</dl>
						</section>
						<!--/ departments -->
					</div>
					
					
					
				</div>
			</main>
			<!--/ page content -->
		</div>
		
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

<!-- Mirrored from html.creaws.com/clinico/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 05:18:01 GMT -->
</html>
<div style="position:relative;top:0px">
<?php
include("footer.php");
?>
</div>