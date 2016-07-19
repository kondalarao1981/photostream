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
	<title>Blog | Meet Our Leaders</title>
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


        <!-- News Bar -->
	<section class="content_section hm_new_con">
		<div class="content clearfix">
			<div class="hm_new_title_con">
				<h4>
					<i class="ico-streetsign"></i>
					<span><span class="latest_word">Latest </span> News</span>
				</h4>
			</div>
			<div class="hm_new_bar">
				<div class="hm_new_bar_slider">
					<div class="news_item">
						<i class="ico-angle-right"></i>
						<a href="#"><span>We are a creative agency located in Egypte</span></a>
					</div>
					<div class="news_item">
						<i class="ico-angle-right"></i>
						<a href="#"><span>We’ve won a ton of awards in web design</span></a>
					</div>
					<div class="news_item">
						<i class="ico-angle-right"></i>
						<a href="#"><span>We believe in simple and creative design</span></a>
					</div>
					<div class="news_item">
						<i class="ico-angle-right"></i>
						<a href="#"><span>Arwen is the best HTML5 theme ever</span></a>
					</div>
					<div class="news_item">
						<i class="ico-angle-right"></i>
						<a href="#"><span>We offer Flexible Pricing Options</span></a>
					</div>
					<div class="news_item">
						<i class="ico-angle-right"></i>
						<a href="#"><span>We are a creative agency located in Egypte</span></a>
					</div>
				</div>
				<div class="hm_new_bar_controll">
					<a class="hm_new_bar_controll_btn play" href="#">
						<i class="pause_news ico-pause2"></i>
						<i class="play_news ico-playback-play"></i>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End News Bar -->
        
        <!-- Our Blog Grids -->
	<section class="content_section bg_gray">
		<div class="content row_spacer no_padding">	
			<div class="main_title centered upper">
				<h2><span class="line"><i class="ico-pencil2"></i></span>From The Blog</h2>
			</div>
			
			<!-- Filter Content -->
			<div class="hm_filter_wrapper masonry_posts three_blocks colored_masonry">  
				<ul class="hm_filter_wrapper_con">
			    		<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#0BACB8">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Awesome Gallery Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<div class="porto_galla">
										<a href="images/blog/blog3.jpg" class="feature_inner_ling">
											<img src="images/blog/blog3.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog5.jpg" class="feature_inner_ling">
											<img src="images/blog/blog5.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog4.jpg" class="feature_inner_ling">
											<img src="images/blog/blog4.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog6.jpg" class="feature_inner_ling">
											<img src="images/blog/blog6.jpg" alt="Post Title">
										</a>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-gallery"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>45 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Photography</a>, <a href="#">Tutorials</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#398098">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Amazing standard post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="images/team/member1.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="images/team/member1.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-image4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>41 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">News</a>, <a href="#">Events</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block hosted_video_audio_con" data-bg="#0BACB8">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Self Hosted Audio</a></h6>
							</div>
							<div class="feature_inner no_corners">
								<div class="self_hosted_container">
									<audio class="hosted_audio" id="audio_player_1" width="100%" preload="metadata" controls="controls">
										<source src="files/alro7-tasry.mp3" type="audio/mp3" />
										
									</audio>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-pencil4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 16, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>5 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Audio</a>, <a href="#">Music</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#02A1AC">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">My First Quote</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<!-- <div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div> -->
									<a href="#" class="quote_con">
										<span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</span>
										<span class="quote_author">Mike Ehrmantraut</span>
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-quote-right"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 19, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>7 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Articles</a>, <a href="#">Events</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#398098">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Standard Blog Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="images/team/member2.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="images/team/member2.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-image4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 22, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>19 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Photography</a>, <a href="#">Tutorials</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#5F52B7">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">SoundCloud Audio Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<!-- <a href="#" class="expand_image"><i class="ico-maximize"></i></a> -->
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<div class="embed-container">
										<iframe width="100%" style="overflow:hidden;border:none;" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/53909324&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-sound3"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 23, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>15 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Media</a>, <a href="#">Music</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry prine.</p>
							</div>
						</div>
					</li><!-- Item -->
					
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#0BACB8">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Self Hosted Video Post</a></h6>
							</div>
							<div class="feature_inner no_corners">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<!-- <a href="#" class="expand_image"><i class="ico-maximize"></i></a> 
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>-->
									</div>
									<div class="self_hosted_container">
										<video class="hosted_video" id="video_player_1" width="100%" height="100%" poster="images/video-boster.jpg" preload="metadata" controls="controls" style="width:100%;height:100%;">
											<source src="files/v1.mp4" type="video/mp4" />
										<source src="files/christmas_snow.ogv" type="video/ogg" />
										<source src="files/christmas_snow.webm" type="video/webm" />
										</video>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<!-- <a href="#" class="blog_grid_format"><i class="ico-video-camera"></i></a> -->
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 01, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>23 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Media</a>, <a href="#">Films</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#5F52B7">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Awesome Single Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="images/team/member1.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="images/team/member1.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-image4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 30, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>17 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Training</a>, <a href="#">News</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#0EA07D">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Vimeo Video Post</a></h6>
							</div>
							<div class="feature_inner no_corners">
								<div class="feature_inner_corners">
									<!-- <div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div> -->
									<div class="embed-container">
										<iframe src="http://player.vimeo.com/video/29193046" width="100%" style="border: 0px none;" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-video-camera"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 22, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>87 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Sports</a>, <a href="#">Summer</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry prine.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#E84C3D">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Edge of The Road</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="images/blog/blog1.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="images/blog/blog1.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-pencil4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>34 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">News</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#398098">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Guardians of the Earth</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="images/team/member2.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="images/team/member2.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-image4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 14, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>11 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Sports</a>, <a href="#">News</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#0BACB8">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">YouTube Video Post</a></h6>
							</div>
							<div class="feature_inner no_corners">
								<div class="feature_inner_corners">
									<!-- <div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div> -->
									<div class="embed-container">
										<iframe width="100%" src="https://www.youtube.com/embed/JAUoeqvedMo" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-video-camera"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 23, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>56 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Video</a>, <a href="#">Cartoon</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block" data-bg="#0BB29D">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Amazing Gallery Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<div class="porto_galla">
										<a href="images/blog/blog3.jpg" class="feature_inner_ling">
											<img src="images/blog/blog3.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog5.jpg" class="feature_inner_ling">
											<img src="images/blog/blog5.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog4.jpg" class="feature_inner_ling">
											<img src="images/blog/blog4.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog6.jpg" class="feature_inner_ling">
											<img src="images/blog/blog6.jpg" alt="Post Title">
										</a>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-gallery"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 25, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>87 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Photography</a>, <a href="#">Media</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
				</ul>
			</div>
			<!-- End Filter Content -->
			
			<div class="content">
				<!-- Pagination -->
				<div id="pagination" class="pagination">
					<ul class="clearfix">
						<li class="prev_pagination"><a href="#"><i class="ico-arrow-left4"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="next_pagination"><a href="#"><i class="ico-arrow-right4"></i></a></li>
					</ul>
				</div>
				<!-- End Pagination -->
			</div>
		</div>
	</section>
	<!-- End Our Blog Grids -->
	



	
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