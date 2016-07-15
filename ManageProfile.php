<?php
session_start();
error_reporting(0);
require_once('Config.php');

if(isset($_SESSION['id']) == ""){

        echo "<script>";
        echo "location.replace('index.php')";
        echo "</script>";        

	}

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
	<title>Preserving Memories | Online Photobooks | Photobook Printing | Hire Photographers</title>
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
	<section class="content_section white_section page_title has_bg_image member_header bg_header2 enar_parallax">
		<div class="content clearfix">
			<h1 class="">John Smith</h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Pages</a>
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Skills -->
	<section class="content_section">
		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-6">
					<h2 class="title1 upper">Web Designer</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known printer of took a galley of type and scrambled it to make a typea specimen book There are many variations of the paes sages the Lorem Ipsum.</p>

					<ul class="list1 gray clearfix">
					    <li>Senior Web Designer</li>
					    <li>23 Years Old</li>
					    <li>7 Years Experience</li>
					    <li>Work in USA</li>
					    <li>500 Project by me</li>
					    <li>Other Details ...</li>
					</ul>
					<div class="social_links_widget clearfix">
						<a href="#" target="_blank" class="twitter"><i class="ico-twitter4"></i></a>
						<a href="#" target="_blank" class="facebook"><i class="ico-facebook4"></i></a>        
						<a href="#" target="_blank" class="googleplus"><i class="ico-google-plus"></i></a>     
						<a href="#" target="_blank" class="linkedin"><i class="ico-linkedin3"></i></a>
						<a href="#" target="_blank" class="vimeo"><i class="ico-vimeo"></i></a>
						
						<a href="skype:#?call" class="skype"><i class="ico-skype2"></i></a>
						<a href="#" target="_blank" class="rss"><i class="ico-rss"></i></a>
						<a href="#" target="_blank" class="flickr"><i class="ico-flickr2"></i></a>
						<a href="#" target="_blank" class="picasa"><i class="ico-picassa"></i></a>
						<a href="#" target="_blank" class="tumblr"><i class="ico-tumblr"></i></a>
						
						<!-- <a href="#" target="_blank" class="dribble"><i class="ico-dribbble"></i></a>
						<a href="#" target="_blank" class="soundcloud"><i class="ico-soundcloud"></i></a>
						<a href="#" target="_blank" class="instagram"><i class="ico-instagram3"></i></a>
						<a href="#" target="_blank" class="pinterest"><i class="ico-pinterest-p"></i></a>
						<a href="#" target="_blank" class="youtube"><i class="ico-youtube3"></i></a> -->
					</div>
				</div><!-- Grid 6 -->
				
				<div class="col-md-6">
					<!-- <div class="main_title side_line upper small">
						<h2><span class="line"></span>My Skills</h2>
					</div> -->
					<h2 class="title1 upper">My Skills</h2>
					
					<div class="progress_bar" data-progress-val="80" data-progress-animation="easeOutQuad" data-progress-delay="300" data-progress-color="#0BACB8">
						<div class="fill_con">
							<div class="fill">
								<span class="title">Web Design</span>
								<span class="value"><span class="num"></span><span>%</span></span>
							</div>
						</div>
					</div>
					<div class="progress_bar" data-progress-val="60" data-progress-animation="easeOutQuad" data-progress-delay="600" data-progress-color="#398098">
						<div class="fill_con">
							<div class="fill">
								<span class="title">Programming</span>
								<span class="value"><span class="num"></span><span>%</span></span>
							</div>
						</div>
					</div>
					<div class="progress_bar" data-progress-val="70" data-progress-animation="easeOutQuad" data-progress-delay="900" data-progress-color="">
						<div class="fill_con">
							<div class="fill">
								<span class="title">HTML/CSS</span>
								<span class="value"><span class="num"></span><span>%</span></span>
							</div>
						</div>
					</div>
					<div class="progress_bar" data-progress-val="100" data-progress-animation="easeOutQuad" data-progress-delay="1200" data-progress-color="#0EA07D">
						<div class="fill_con">
							<div class="fill">
								<span class="title">Wordpress</span>
								<span class="value"><span class="num"></span><span>%</span></span>
							</div>
						</div>
					</div>
					<div class="progress_bar" data-progress-val="40" data-progress-animation="easeOutQuad" data-progress-delay="1500" data-progress-color="#E74C3C">
						<div class="fill_con">
							<div class="fill">
								<span class="title">Joomla</span>
								<span class="value"><span class="num"></span><span>%</span></span>
							</div>
						</div>
					</div>
				</div><!-- Grid 6 -->
				
			</div>
		</div>
	</section>
	<!-- End Skills -->
	
	<!-- Client Say -->
	<section class="content_section white_section enar_parallax bg5">
		<div class="bg_overlay">
			<div class="content row_spacer clearfix">	
				<div class="main_title centered upper">
					<h2><span class="line"></span>What they say about me</h2>
				</div>                
				<div class="normal_text_slider client_say_slider">
					<div class="c_say">
						<div class="centered">
							<span class="client_img">
								<span>
									<img src="images/clients/client1.jpg" alt="client name">
								</span>
							</span>
						</div>
						<span class="client_details">
							<span class="name">Alan Snow</span> - 
							<span class="url">www.yourwebsite.com</span>
						</span>
						<span class="desc">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						</span>
					</div>
					<div class="c_say">
						<div class="centered">
							<span class="client_img">
								<span>
									<img src="images/clients/client2.jpg" alt="client name">
								</span>
							</span>
						</div>
						<span class="client_details">
							<span class="name">John Doe</span> - 
							<span class="url">www.yourwebsite.com</span>
						</span>
						<span class="desc">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						</span>
					</div>
					<div class="c_say">
						<div class="centered">
							<span class="client_img">
								<span>
									<img src="images/clients/client3.jpg" alt="client name">
								</span>
							</span>
						</div>
						<span class="client_details">
							<span class="name">Harry John</span> - 
							<span class="url">www.yourwebsite.com</span>
						</span>
						<span class="desc">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Client Say  -->
	
	<!-- Works -->
	<section class="content_section">

		<div class="content row_spacer">
			<div class="main_title centered upper">
				<h2><span class="line"><span class="dot"></span></span>Some of my work</h2>
			</div>
			
			<div class="related_posts">
				<div class="related_posts_con">
					<div class="related_posts_slide">
						<div class="related_img_con">
							<a href="#" class="related_img">
								<img alt="" src="images/blog/blog1.jpg">
								<span><i class="ico-pencil4"></i></span>
							</a>
						</div>
						<a class="related_title" href="#">Edge of The Road</a>
						<span class="post_date">2015/04/12</span>
					</div>
					<div class="related_posts_slide">
						<div class="related_img_con">
							<a href="#" class="related_img">
								<img alt="" src="images/blog/blog2.jpg">
								<span><i class="ico-image4"></i></span>
							</a>
						</div>
						<a class="related_title" href="#">Train Your Self</a>
						<span class="post_date">2015/04/13</span>
					</div>
					<div class="related_posts_slide">
						<div class="related_img_con">
							<a href="#" class="related_img">
								<img alt="" src="images/blog/blog3.jpg">
								<span><i class="ico-sound3"></i></span>
							</a>
						</div>
						<a class="related_title" href="#">Most Beautiful Girl</a>
						<span class="post_date">2015/04/14</span>
					</div>
					<div class="related_posts_slide">
						<div class="related_img_con">
							<a href="#" class="related_img">
								<img alt="" src="images/blog/blog4.jpg">
								<span><i class="ico-quote-right"></i></span>
							</a>
						</div>
						<a class="related_title" href="#">Fly Into The Future</a>
						<span class="post_date">2015/04/15</span>
					</div>
					<div class="related_posts_slide">
						<div class="related_img_con">
							<a href="#" class="related_img">
								<img alt="" src="images/blog/blog5.jpg">
								<span><i class="ico-gallery"></i></span>
							</a>
						</div>
						<a class="related_title" href="#">Dawn of Justice</a>
						<span class="post_date">2015/04/16</span>
					</div>
					<div class="related_posts_slide">
						<div class="related_img_con">
							<a href="#" class="related_img">
								<img alt="" src="images/blog/blog6.jpg">
								<span><i class="ico-comment2"></i></span>
							</a>
						</div>
						<a class="related_title" href="#">Guardians of the Earth</a>
						<span class="post_date">2015/04/17</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Works -->
	
	<!-- Clients -->
	<section class="content_section bg_gray border_b_n">
		<div class="content row_spacer clearfix">	                
			<div class="our_client_slider">
				<div class="c_logo">
					<img src="images/clients/logo1.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo2.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo3.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo4.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo5.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo6.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo1.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo2.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo3.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo4.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo5.png" alt="client name">
				</div>
				<div class="c_logo">
					<img src="images/clients/logo6.png" alt="client name">
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients  -->
	


	
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
<script src="js/createprofile_validate.js" type="text/javascript"></script>
</body>


</html>