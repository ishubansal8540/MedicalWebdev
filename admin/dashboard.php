
 <?php
 include("connect/db.php");
 session_start();
 if(isset($_COOKIE['username']) || isset($_SESSION['name']))
 {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
     
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""> 
               <marquee width="800%"><p id="log" style="margin-top:10px;float:left;width:400px;font-family:Lucida;font-size:50px">Admin Panel</p></marquee></a>
			   
			   <div class="btn-group pull-right" style="margin-top:20px;">
			   <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			   <i class="glyphicon glyphicon-user"><b><font size="3">Admin</font></b></i><span class="hidden-sm hidden-xs">
			   </span>
			   <span class="caret"></span>
				</button>
			<ul class="dropdown-menu">
			 		   <li><a href="adminchange_password.php" ><b><font size="3">Change Password</font></b></a></li>
			   <li class="divider"></li>
			</ul>
			<?php
			}
			else
			{
			header("location:index.php");
			}
			?>
			</div>
			   </div>
    </div>
    <!-- topbar ends -->

    
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Insert section</li>
                        
                        <li><a class="ajax-link" href="insert_category.php" target="php"><span style="position:relative:left:150px"> Insert category</span></a>
                        </li>
                        <li><a class="ajax-link" href="insert_sub_category.php" target="php"><span> Insert sub-category</span></a></li>
                        <li><a class="ajax-link" href="insert_diseases.php" target="php"><span> Insert diseases</span></a>
                        </li>
						
                        <li><a class="ajax-link" href="insert_doctors.php" target="php"><span> Insert doctor</span></a>
                        </li>
			
                        
						<li><a class="ajax-link" href="insert_gym.php" target="php"><span>Insert gym</span></a>
                        </li>
                        <li class="nav-header hidden-md">View Section</li>

                        <li>
                            <a class="ajax-link" href="view_category.php" target="php"><span> Category</span></a>
                            
							</li>
                        <li><a class="ajax-link" href="view_sub_category.php" target="php"><span>Sub Category</span></a>
                        </li>
                        <li><a class="ajax-link" href="view_diseases.php" target="php"><span> Diseases</span></a></li>
									                        
				<li><a class="ajax-link" href="view_doctor.php" target="php"><span> Doctor</span></a>
                          </li>
			
									<li><a class="ajax-link" href="view_signup.php" target="php"><span> Registered Users</span></a>
                        </li>
                        <li><a class="ajax-link" href="view_contact_us.php" target="php"><span> Queries</span></a>
                        </li>
                       
                        <li><a class="ajax-link" href="view_gym.php" target="php"><span>Gym</span></a></li>
                        
                       
                    </ul>
                    
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Registered Users</div>
            <div>
			<?php
			include("connect/db.php");
			$x="Select count(sno) from signup";
			$y=mysqli_query($connect,$x);
			while($z=mysqli_fetch_array($y))
			{
			echo $z[0];
			}
			?>
			</div>
            
        </a>
    </div>

    

  

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Messages</div>
            <div>
			<?php
			include("connect/db.php");
			$x="Select count(message) from contact_us";
			$y=mysqli_query($connect,$x);
			while($z=mysqli_fetch_array($y))
			{
			echo $z[0];
			}
			?>
			</div>
            
        </a>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            
		
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
									<iframe src="" height="900px" width="1050px" name="php" style="border:hidden;"></iframe>
                   
                </div>
                <!-- Ads, you can remove these -->
				
                <div class="col-lg-5 col-md-12 hidden-xs center-text">
				
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Charisma Demo 4 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:336px;height:280px"
                         data-ad-client="ca-pub-5108790028230107"
                         data-ad-slot="9467443105"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <div class="col-lg-5 col-md-12 visible-xs center-text">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Ch-arisma Demo 5 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:250px;height:250px"
                         data-ad-client="ca-pub-5108790028230107"
                         data-ad-slot="8957582309"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <!-- Ads end -->

            </div>
        </div>
    </div>
</div>
                    

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

</body>
</html>
