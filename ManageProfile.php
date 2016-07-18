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
        
        <?php
        
            /*********** Fetching the data for profile information **********/
        
        $sel = mysql_query("SELECT * FROM ph_photographers_info WHERE ph_user_id = '".$_SESSION['id']."'");
        $row = mysql_fetch_array($sel);
        
        $business_cover_photo = $row['ph_business_cover_photo_path'];
        $business_name = $row['ph_business_name'];
        
        ?>

        <!-- Page Title -->
	<section class="content_section white_section page_title has_bg_image member_header enar_parallax" style="background-image: url('<?php echo $business_cover_photo;?>');">
		<div class="content clearfix">
			<h1 class=""><?php echo $business_name;?></h1>			
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Tabs Container -->
			<div class="hm-tabs tabs2 fill_active">
				<nav class="clearfix">
					<ul class="tabs-navi">
						<li><a data-content="vission" class="selected" href="#"><span></span>Vission</a></li>
						<li><a data-content="solutions" href="#"><span></span>Solutions</a></li>
						<li><a data-content="gallery" href="#"><span></span>Gallery</a></li>
						<li><a data-content="technology" href="#"><span></span>Technology</a></li>
						<li><a data-content="settings" href="#"><span></span>Settings</a></li>
					</ul>
				</nav>
			
				<ul class="tabs-body">
					<li data-content="vission" class="selected">
						<h6>Why Choose Us ?</h6>
						<p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
				
						<p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
					</li>
				
					<li data-content="solutions">
						<p>New Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.</p>
				
						<p>New Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.</p>
					</li>
				
					<li data-content="gallery">
						<p>Gallery Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque tenetur aut, cupiditate, libero eius rerum incidunt dolorem quo in officia.</p>
				
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa vero, culpa doloremque voluptatum consectetur mollitia, atque expedita unde excepturi id, molestias maiores delectus quos molestiae. Ab iure provident adipisci eveniet quisquam ratione libero nam inventore error pariatur optio facilis assumenda sint atque cumque, omnis perspiciatis. Maxime minus quam voluptatum provident aliquam voluptatibus vel rerum. Soluta nulla tempora aspernatur maiores! Animi accusamus officiis neque exercitationem dolore ipsum maiores delectus asperiores reprehenderit pariatur placeat, quaerat sed illum optio qui enim odio temporibus, nulla nihil nemo quod dicta consectetur obcaecati vel. Perspiciatis animi corrupti quidem fugit deleniti, atque mollitia labore excepturi ut.</p>
					</li>
				
					<li data-content="technology">
						<p>Store Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
				
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, enim, pariatur. Ab assumenda, accusantium! Consequatur magni placeat quae eos dicta, cum expedita sunt facilis est impedit possimus dolorum sequi nostrum nobis sit praesentium molestias nulla laudantium fugit corporis nam ut saepe harum ipsam? Debitis accusantium, omnis repudiandae modi, distinctio illo voluptatibus aperiam odio veritatis, quam perferendis eaque ullam. Temporibus tempore ad voluptates explicabo ea sit deleniti ipsum quos dolores tempora odio, ab corporis molestiae, eaque optio, perferendis! Cumque libero quia modi! Totam magni rerum id iusto explicabo distinctio, magnam, labore sed nemo expedita velit quam, perspiciatis non temporibus sit minus voluptatum. Iste, cumque sunt suscipit facere iusto asperiores, ullam dolorum excepturi quidem ea quibusdam deserunt illo. Nesciunt voluptates repellat ipsam.</p>
					</li>
				
					<li data-content="settings">
						<p>Settings Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nam magni, ullam nihil a suscipit, ex blanditiis, adipisci tempore deserunt maiores. Nostrum officia, ratione enim eaque nihil quis ea, officiis iusto repellendus. Animi illo in hic, maxime deserunt unde atque a nesciunt? Non odio quidem deserunt animi quod impedit nam, voluptates eum, voluptate consequuntur sit vel, et exercitationem sint atque dolores libero dolorem accusamus ratione iste tenetur possimus excepturi. Accusamus vero, dignissimos beatae tempore mollitia officia voluptate quam animi vitae.</p>
				
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ipsam eum reprehenderit minima at sapiente ad ipsum animi doloremque blanditiis unde omnis, velit molestiae voluptas placeat qui provident ab facilis.</p>
					</li>
				</ul>
			</div>
			<!-- End Tabs Container -->
	
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