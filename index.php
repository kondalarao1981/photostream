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


        <!-- Flex Slider -->
	<section class="flex_slider_container flex_style1">
		<div id="flex_carousel" class="flexslider has_ovellay">
			<ul class="slides">
				<li>
					<img src="images/blog/slide42.jpg" alt="Image Title" />
				</li>				
			</ul>
		</div>		
	</section>
	<!-- End Flex Slider -->	
	
	
	<!-- Icon Boxes Style 1 A -->
	<section class="content_section">
		<div class="container icons_spacer">
			<div class="main_title centered upper">
				<h2><span class="line"><span class="dot"></span></span>About FOTOGS</h2>
			</div>
			<div class="icon_boxes_con style1 clearfix">
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="ico-tools-2"></i></span>
						<div class="service_box_con centered">
							<h3>Happiest Memories</h3>
							<span class="desc">FOTOGS is in the business of helping you record and preserve your happiest memories</span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="color1 ico-mobile4"></i></span>
						<div class="service_box_con centered">
							<h3>On Budget</h3>
							<span class="desc">India’s most comprehensive photographer's to help you find the perfect pro shooter.</span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="color2 ico-heart5"></i></span>
						<div class="service_box_con centered">
							<h3>Unique Style</h3>
							<span class="desc">You can search for photographers based on your budget, location and preferred photography style.</span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="color3 ico-key4"></i></span>
						<div class="service_box_con centered">
							<h3>Post Assignment</h3>
							<span class="desc">Simply search or post your assignment on FOTOGS and wait for the pros to contact you.</span>
							<a href="#" class="ser-box-link"><span></span>Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Icon Boxes Style 1 A -->



	<!-- Isotope Filter Masonry -->
	<section class="content_section bg_gray border_t_n">
	    <div class="row_spacer_t clearfix">
	    
		<div class="content">
		    <div class="main_title centered upper">
			<h2><span class="line"></span>Popular Categories</h2>
		    </div>
		</div>
		
		<!-- Filter Content -->
		<div class="hm_filter_wrapper masonry_porto five_portos project_text_nav full_portos has_sapce_portos upper_title porto_hidden_title">
		    <div id="options" class="sort_options clearfix">
			<ul data-option-key="filter" class="option-set clearfix" id="filter-by">
			    <li><a data-option-value="*" class="selected" href="#"><span>all</span><span class="num"></span></a></li>
			    <li><a data-option-value=".design" class="" href="#"><span>Wedding</span><span class="num"></span></a></li>
			    <li><a data-option-value=".photography" class="" href="#"><span>Kids</span><span class="num"></span></a></li>
			    <li><a data-option-value=".video" class="" href="#"><span>Fashion</span><span class="num"></span></a></li>
			    <li><a data-option-value=".printing" class="" href="#"><span>Travel & Nature</span><span class="num"></span></a></li>
			    <li><a data-option-value=".wordpress" class="" href="#"><span>Commercial</span><span class="num"></span></a></li>
			</ul>
			<div class="sort_list">
			    <a href="#" class="sort_selecter">
				<span class="text">Sort By</span>
				<span class="arrow"><i class="ico-arrow-back"></i></span>
			    </a>
			    <ul data-option-key="sortBy" class="option-set clearfix" id="sort-by">
				<li><a data-option-value="name" href="#" class=""><span class="text">name</span></a></li>
				<li><a data-option-value="number" href="#" class=""><span class="text">date</span></a></li>
			    </ul>
			</div>
			<ul data-option-key="sortAscending" class="option-set clearfix" id="sort-direction">
			    <li><a class="selected" data-option-value="true" href="#">
				<span><i class="ico-keyboard-arrow-up"></i></span></a>
			    </li>
			    <li><a data-option-value="false" href="#" class="">
				<span><i class="ico-keyboard-arrow-down"></i></span></a>
			    </li>
			</ul>
		    </div>     
			      
		    <div class="hm_filter_wrapper_con">
			    <div class="filter_item_block width2 rectangle_width video">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/masonry1.jpg">
							    <img src="images/portfolio/masonry1.jpg" alt="Portfolio Name">
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Flat Logo Design</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150410</span>April 10, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">12</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">100</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design video printing wordpress">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto2.jpg">
							    <img src="images/portfolio/porto2.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Dawn of Justice</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150412</span>April 12, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">134</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">50</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto3.jpg">
							    <img src="images/portfolio/porto3.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Fly On the sky</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150401</span>April 1, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">34</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">123</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design photography printing">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto4.jpg">
							    <img src="images/portfolio/porto4.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Need For Speed</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150422</span>April 22, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">89</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">653</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto5.jpg">
							    <img src="images/portfolio/porto5.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Days of Future</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150430</span>April 30, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">54</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">988</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block width2 design wordpress">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto5.jpg">
							    <img src="images/portfolio/porto9.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Star Lord</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150424</span>April 24, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">21</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">67</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress photography printing">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto6.jpg">
							    <img src="images/portfolio/porto6.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Into the light</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150321</span>March 21, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">134</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">50</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto7.jpg">
							    <img src="images/portfolio/porto7.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Dont be Shy</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150327</span>March 27, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">21</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">521</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    
			    <div class="filter_item_block design wordpress photography printing">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto8.jpg">
							    <img src="images/portfolio/porto8.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Designers Master</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150403</span>April 3, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">75</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">761</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    <div class="filter_item_block photography">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto2.jpg">
							    <img src="images/portfolio/porto1.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Flat Logo Design0</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150511</span>May 11, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">5</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">254</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
			    <div class="filter_item_block photography">
				    <div class="porto_block porto_animate">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto2.jpg">
							    <img src="images/portfolio/porto10.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							<a href="#" class="expand_img">View Larger</a>
							<a href="#" class="detail_link">More Details</a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Flat Logo Design1</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20150503</span>May 3, 2015</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">71</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">99</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->
		    </div>
		</div>
		<!-- End Filter Content -->
		
	    </div>    
	</section>
	<!-- End Isotope Filter Masonry -->


	
	<!-- Features Box 1 -->
	<section class="content_section bg_fixed white_section bg1">
	    <div class="bg_overlay">
		<div class="content no_padding clearfix">
		    <div class="col-md-8 row_spacer">
			<h2 class="title2"><span class="red"><i class="ico-globe3"></i></span>Photo Inspirations at FOTOGS</h2>
			<p>All new selection of most creative photos and unique designs at FOTOGS.</p>
			    <!-- <p>and scrambled it to make a typea specimen book There are many variations of the paes sages the Lorem Ipsum available, but the majority have to suffered alteration iner some form with injected randomised words which.</p> -->
			<ul class="list1 black list_circle clearfix">
			    <li>Unique Photographic Designs</li>
			    <li>Pick from Wide range of categories</li>
			    <li>Popular Photographers from all over India</li>
			    <li>Easy to select your favorite Photographers</li>
			    <li>Filter by within in the Budget</li>
			    <li>All new collection of finest portifolio's</li>
			    <li>Photographer's can post assignment</li>
			    <li>Customers can list out their photographers</li>
			</ul>
			<div>
			    <a class="btn_b italic" href="#">
				    <span class="hidden_element" data-text="Explore Now">Explore Now</span>
			    </a>
			</div>
		    </div>
		   <!--  <div class="has_col_img on_desktop">
			    <img class="" src="images/tab1.png" alt="Image Description">
		    </div> -->
		</div>
	    </div>
	</section>
	<!-- End Features Box 1 -->
	
	<!-- Tabs 1 -->
	<section class="content_section bg_gray border_t_n">
	    <div class="content row_spacer">
		<div class="main_title centered upper">
		    <h2><span class="line"><span class="dot"></span></span>Why Choose FOTOGS?</h2>
		</div>
		<div class="hm-tabs tabs2 upper_title">
			<!-- <nav class="clearfix">
			    <ul class="tabs-navi">
				<li><a data-content="vission" class="selected" href="#"><span><i class="ico-star3"></i></span>Vission</a></li>
				<li><a data-content="mession" href="#"><span><i class="ico-heart6"></i></span>Mession</a></li>
				<li><a data-content="goals" href="#"><span><i class="ico-paperplane"></i></span>Goals</a></li>
				<li><a data-content="solutions" href="#"><span><i class="ico-bulb"></i></span>Solutions</a></li>
			    </ul> 
			</nav> -->
		    
			<ul class="tabs-body">
			    <li data-content="vission" class="selected clearfix">
				
				<div class="tab_img">
					<a class="magnific-popup img_popup" href="images/home2.jpg">
					<span><i class="ico-maximize"></i></span>
					<img class="popup_img" src="images/home2.jpg" alt="vission">
				    </a>
				</div>
				<h6>Our Vission</h6>
				<p>FOTOGS is in the business of helping you record and preserve your happiest memories.
We have put together India’s most comprehensive photographer's directory to help you find the perfect pro shooter for all your photography needs. You can search for photographers based on your budget, location and preferred photography style.</p>
		    
				<p>From weddings to engagements to kids’ birthdays, graduation ceremonies, corporate events, editorial or advertising work, we have your professional photography needs covered. Simply search or post your assignment on FOTOGS Classifieds and wait for the pros to contact you.</p>
			    </li>  
		
			</ul>
			<!-- Tabs Content -->
		</div> 
		<!-- End Tabs Container --> 
	    </div>
	</section>
	<!-- End Tabs 1 -->
	
	<!-- Features Slider 1-->
	<!-- <section class="content_section bg_fixed white_section bg2">
	    <span class="section_icon"><i class="ico-tools"></i></span>
	    <div class="bg_overlay1">
		<div class="content row_spacer_t clearfix">
		
		    <div class="main_title centered upper">
			<h2><span class="line"></span>We are Arwen</h2>
		    </div>
		    
		    <span class="description4 centered">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour of this randomised words which don't look even slightly believable.</span>
		    
		    <div class="png_slider">
			    <div class="png_slide">
			
				    <img src="images/browser1.png" alt="Device1">
			    </div>
			    <div class="png_slide">
			
				    <img src="images/browser1.png" alt="Device1">
			    </div>
			    <div class="png_slide">
				    
				    <img src="images/browser1.png" alt="Device1">
			    </div>
		    </div>
		    
		</div>
	    </div>
	</section> -->
	<!-- End Features Slider 1 -->
        
	<!-- Counter 3 -->
	<!-- <section class="content_section">
		<div class="content row_spacer">
			<div class="counter_b clearfix">
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="300">
						<span class="icon"><i class="ico-user5"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="1500">1500</span>
						<span class="title">clients</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="600">
						<span class="icon"><i class="ico-heart6"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="13">13</span>
						<span class="title">Awards</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="900">
						<span class="icon"><i class="ico-code2"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="94771">94771</span>
						<span class="title">Line Of Code</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="1200">
						<span class="icon"><i class="ico-paperplane"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="384">384</span>
						<span class="title">Projects</span>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Counter 3 -->
	
	<!-- Photo Inspirations -->
	<section class="content_section white_section bg_color4 bg12 bg_fixed">
		<span class="section_icon"><!-- <i class="ico-twitter4"></i> --></span>
		<div class="bg_overlay">
			<div class="content row_spacer">	
				<div class="main_title centered upper">
				    <h2><span class="line"></span>Photo Inspirations at Fotogs</h2>
				</div>
				
				<div class="normal_text_slider centered">
					<div class="text_slide">
						<span class="desc">
							All-new selection of the most creative photos at FOTOGS.
						</span>

						<span class="flex_in3 upper light oswald_font">
										<!--Get Your Copy!-->
						</span>
						<a href="#" class="bordered_btn_white upper">Explore Now</a>
						<!-- <a class="btn_a" target="_self" href="#">
							<span>
								<i class="in_left ico-arrow-right4"></i>
								<span>Follow Us</span>
								<i class="in_right ico-arrow-right4"></i>
							</span>
						</a> -->
					</div>
					<!-- <div class="text_slide">
						<span class="desc">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						</span>
						<a class="btn_a" target="_self" href="#">
							<span>
								<i class="in_left ico-arrow-right4"></i>
								<span>Follow Us</span>
								<i class="in_right ico-arrow-right4"></i>
							</span>
						</a>
					</div> -->
				</div>
			    
			</div>
		</div>
	</section>
	<!-- End Photo Inspirations -->
	
	<br /><br /><br /><br />

	<!-- Shooting Stars -->
	<section class="content_section white_section bg_color4 bg13 bg_fixed">
		<span class="section_icon"><!-- <i class="ico-twitter4"></i> --></span>
		<div class="bg_overlay">
			<div class="content row_spacer">	
				<div class="main_title centered upper">
				    <h2><span class="line"></span>FOTOGS Shooting Stars</h2>
				</div>
				
				<div class="normal_text_slider centered">
					<div class="text_slide">
						<span class="desc">
							All-new collection of the finest portfolios at FOTOGS.
						</span>

						<span class="flex_in3 upper light oswald_font">
										<!--Get Your Copy!-->
						</span>
						<a href="#" class="bordered_btn_white upper">Explore Now</a>
						<!-- <a class="btn_a" target="_self" href="#">
							<span>
								<i class="in_left ico-arrow-right4"></i>
								<span>Follow Us</span>
								<i class="in_right ico-arrow-right4"></i>
							</span>
						</a> -->
					</div>
					<!-- <div class="text_slide">
						<span class="desc">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						</span>
						<a class="btn_a" target="_self" href="#">
							<span>
								<i class="in_left ico-arrow-right4"></i>
								<span>Follow Us</span>
								<i class="in_right ico-arrow-right4"></i>
							</span>
						</a>
					</div> -->
				</div>
			    
			</div>
		</div>
	</section>
	<!-- End Shooting Stars -->

	<br /><br />
	
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
</body>


</html>