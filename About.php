<?php
session_start();
error_reporting(0);
require_once('Config.php');
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<title>About Us | Meet Our Leaders</title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	
	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
	<link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />
	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
	
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/icon-fonts.css" type="text/css" media="all" />
        
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- Google Recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body class="preloader3 dark_sup_menu light_header">
<div id="preloader">
	<div class="spinner">
		<div class="sk-dot1"></div><div class="sk-dot2"></div>
		<div class="rect3"></div><div class="rect4"></div>
		<div class="rect5"></div>
	</div>
</div>

<div id="main_wrapper">
	
	<?php require_once('Header.php');?>	


        <!-- Page Title -->
	<section class="content_section white_section page_title has_bg_image bg_header1 enar_parallax">
		<div class="content clearfix">
			<h1 class="">About Us</h1>
			<div class="breadcrumbs">
				
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Icon Boxes Style 1 D -->
	<section class="content_section">
		<div class="container icons_spacer">
			<div class="main_title centered upper">
				<h2><span class="line"><span class="dot"></span></span>Our Goals</h2>
			</div>
			<div class="icon_boxes_con style1 circle upper_title just_icon_border solid_icon clearfix">
				<div class="col-md-4">
					<div class="service_box">
						<span class="icon"><i class="ico-tools-2"></i></span>
						<div class="service_box_con centered">
							<h3>Super Coding</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service_box">
						<span class="icon"><i class="ico-mobile4"></i></span>
						<div class="service_box_con centered">
							<h3>Best User Interface</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service_box">
						<span class="icon"><i class="ico-key4"></i></span>
						<div class="service_box_con centered">
							<h3>Easy to Customize</h3>
						<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Icon Boxes Style 1 D -->
	
	
	
	<!-- Section -->
	<section class="content_section bg_gray">
		<div class="container row_spacer">
			<div class="rows_container clearfix">
				<!-- Tabs Container -->
				<div class="col-md-6">
					<div class="main_title upper small">
						<h2><span class="line"><span class="dot"></span></span>Why Choose Us?</h2>
					</div>
					<div class="hm-tabs tabs1">
						<nav>
							<ul class="tabs-navi">
								<li><a data-content="quality" class="selected" href="#"><span></span>Quality</a></li>
								<li><a data-content="design" href="#"><span></span>Design</a></li>
								<li><a data-content="programming" href="#"><span></span>Programming</a></li>
							</ul>
							<!-- tabs-navi -->
						</nav>
					
						<ul class="tabs-body">
							<li data-content="quality" class="selected">
								<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
						                
								<div class="col-md-6">
									<ul class="list3 clearfix">
										<li>Multiple Layout</li>
										<li>Awesome Shortcodes</li>
										<li>Browser Compatibility</li>
										<li>Easy to Edit Animations</li>
										<li>Parallax Effect</li>
										<li>Responsive Design</li>
										<li>Many Home Page Versions</li>
										<li>Many Blog Pages</li>
									</ul>
								</div>
								<div class="col-md-6">
									<a href="images/portfolio/porto5.jpg" class="magnific-popup img_popup">
										<img src="images/portfolio/porto5.jpg" alt="Image Title">
										<span>
											<i class="ico-maximize"></i>
										</span>
									</a>
								</div>
								<div class="clear"></div>
							</li>
						
							<li data-content="design">
<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
						                
								<div class="col-md-6">
									<ul class="list3 clearfix">
										<li>Multiple Layout</li>
										<li>Awesome Shortcodes</li>
										<li>Browser Compatibility</li>
										<li>Easy to Edit Animations</li>
										<li>Parallax Effect</li>
										<li>Responsive Design</li>
										<li>Many Home Page Versions</li>
										<li>Many Blog Pages</li>
									</ul>
								</div>
								<div class="col-md-6">
									<a href="images/portfolio/porto3.jpg" class="magnific-popup img_popup">
										<img src="images/portfolio/porto3.jpg" alt="Image Title">
										<span>
											<i class="ico-maximize"></i>
										</span>
									</a>
								</div>
								<div class="clear"></div>
							</li>
						
							<li data-content="programming">
							    <p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
						                
								<div class="col-md-6">
									<ul class="list3 clearfix">
										<li>Multiple Layout</li>
										<li>Awesome Shortcodes</li>
										<li>Browser Compatibility</li>
										<li>Easy to Edit Animations</li>
										<li>Parallax Effect</li>
										<li>Responsive Design</li>
										<li>Many Home Page Versions</li>
										<li>Many Blog Pages</li>
									</ul>
								</div>
								<div class="col-md-6">
									<a href="images/portfolio/porto4.jpg" class="magnific-popup img_popup">
										<img src="images/portfolio/porto4.jpg" alt="Image Title">
										<span>
											<i class="ico-maximize"></i>
										</span>
									</a>
								</div>
								<div class="clear"></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- End Tabs Container -->
				
				<div class="col-md-6">
					<div class="main_title upper small">
						<h2><span class="line"><span class="dot"></span></span>More Features</h2>
					</div>
					<!-- My Accordion -->
					<div class="enar_accordion plus_minus" data-type="accordion"> <!-- accordion - toggle -->
						<div class="enar_occ_container" data-expanded="true">
							<span class="enar_occ_title"><i class="ico-head"></i>Customer Services 24/7</span>
							<div class="enar_occ_content">
								<div class="acc_content">
								<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
								</div>
							</div>
						</div>
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><i class="ico-heart3"></i>Integrity and Honesty</span>
							<div class="enar_occ_content">
								<div class="acc_content">
								<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
								</div>
							</div>
						</div>
						<div class="enar_occ_container" data-expanded="false">
							<span class="enar_occ_title"><i class="ico-check3"></i>The best sales on the Country</span>
							<div class="enar_occ_content">
								<div class="acc_content">
								<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
	<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor standar dummyy text ever since the when an iunesi known.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End My Accordion -->
				</div>
				
			</div>
			<!-- End Rows Container -->
		</div>
	</section>
	<!-- End Section -->
	
	<!-- Skills 2 -->
	<section class="content_section white_section bg_color5">
		<span class="section_icon"><i class="ico-strategy"></i></span>
		<div class="content row_spacer no_padding">	
			<div class="main_title centered upper">
			    <h2><span class="line"></span>Our Skills</h2>
			</div>
			
			<div class="rows_container clearfix">
				<div class="col-md-6">
					<h2 class="title1 upper">Skills Description</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known printer of took a galley of type.</p>
					<p>and scrambled it to make a typea specimen book There are many variations of the paes sages the Lorem Ipsum available, but the majority have to suffered alteration iner some form with injected randomised words which.</p>
					<ul class="list1 black list_circle clearfix">
						<li>Multiple Layout</li>
						<li>Awesome Shortcodes</li>
						<li>Browser Compatibility</li>
						<li>Easy to Edit Animations</li>
						<li>Parallax Effect</li>
						<li>Responsive Design</li>
						<li>Many Home Page Versions</li>
						<li>Many Blog Pages</li>
						<li>Multiple Layout</li>
						<li>Awesome Shortcodes</li>
					</ul>
				</div><!-- Grid 6 -->
				
				<div class="col-md-6">
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-laptop2"></i><span class="prog_bar2_title">Web Design</span></span>
						<div class="progress_bar prog_bar2" data-progress-val="80" data-progress-animation="easeOutQuad" data-progress-delay="300" data-progress-color="#0BACB8">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
					
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-code2"></i><span class="prog_bar2_title">Programming</span></span>
						<div class="progress_bar prog_bar2" data-progress-val="60" data-progress-animation="easeOutQuad" data-progress-delay="600" data-progress-color="#B97FDB">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
					
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-heart2"></i><span class="prog_bar2_title">HTML/CSS</span></span>
						<div class="progress_bar prog_bar2" data-progress-val="70" data-progress-animation="easeOutQuad" data-progress-delay="900" data-progress-color="">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
					
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-search42"></i><span class="prog_bar2_title">Wordpress</span></span>
						<div class="progress_bar prog_bar2" data-progress-val="100" data-progress-animation="easeOutQuad" data-progress-delay="1200" data-progress-color="#00BC90">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
					
					<div class="prog_bar2_con">
						<span class="title"><i class="ico-key32"></i><span class="prog_bar2_title">Joomla</span></span>
						<div class="progress_bar prog_bar2" data-progress-val="40" data-progress-animation="easeOutQuad" data-progress-delay="1500" data-progress-color="#FF513E">
							<div class="fill_con2">
								<div class="fill">
									<span class="value"><span class="num"></span><span>%</span></span>
								</div>
							</div>
							<div class="fill_con">
								<div class="fill"></div>
							</div>
						</div>
					</div>
				</div><!-- Grid 6-->
			</div>
		</div>
	</section>
	<!-- End Skills 2 -->
	
	<!-- Features 3-->
	<section class="content_section">
		<div class="container row_spacer clearfix">
			<div class="content">
				<div class="main_title centered upper">
					<h2><span class="line"><span class="dot"></span></span>Our Features</h2>
				</div>
			</div>
			<!-- Rows Container -->
			<div class="icon_boxes_con style2 icon_box_no_border upper_title clearfix">
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-desktop2"></i></span></a>
						<div class="service_box_con">
							<h3>Premium Sliders Included</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-tablet3"></i></span></a>
						<div class="service_box_con">
							<h3>100% Responsive Layout</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-beaker"></i></span></a>
						<div class="service_box_con">
							<h3>Powerful Performance</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<img src="images/looking1.jpg" alt="Image Title">
				</div>
			</div>
			<!-- End Rows Container -->
		</div>
	</section>
	<!-- End Features 3 -->
	
	<!-- Clients 1 -->
	<section class="content_section white_section bg_color3">
		<div class="content row_spacer clearfix">	                
			<div class="our_client_slider">
				<div class="c_logo">
					<img src="images/clients/logo7.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo8.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo9.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo10.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo11.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo12.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo7.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo8.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo9.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo10.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo11.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo12.png" alt="client name">
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients 1 -->
	



	
	<?php require_once('Footer.php');?>
	
	<a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->

<script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
<script src="js/plugins.js"></script>	
<script type="text/javascript" src="js/flexslider-min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<!-- this is where we put our custom functions -->
<script type="text/javascript" src="js/functions.js"></script>
<script src="js/signup_validate.js" type="text/javascript"></script>
<script src="js/signin_validate.js" type="text/javascript"></script>
</body>


</html>