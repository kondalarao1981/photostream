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
        
        <script type="text/javascript">(function(){window.switchTo5x=false;var e=document.createElement("script");e.type="text/javascript";e.async=true;e.onload=function(){try{stLight.options({publisher: "73165ed0-48e5-4e4a-a14b-b3cef627e07c-a51c", doNotHash: false, doNotCopy: false, hashAddressBar: false});}catch(e){}};e.src=("https:" == document.location.protocol ? "https://ws" : "http://w") + ".sharethis.com/button/buttons.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(e, s);})();</script>
	
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
        $business_city = $row['ph_business_city'];
        $business_state = $row['ph_business_state'];
        $business_address = $row['ph_business_address'];
        $business_pincode = $row['ph_business_pincode'];
        $business_regions = $row['ph_business_regions'];
        $business_languages = $row['ph_business_languages'];
        $business_photostyle = $row['ph_business_photostyle'];
        $business_photo_name = $row['ph_business_photo_name'];
        $business_photo_path = $row['ph_business_photo_path'];
        $business_video_name = $row['ph_business_video_name'];
        $business_video_path = $row['ph_business_video_path'];
        $business_starting_price = $row['ph_business_photography_price'];
        $business_categories = $row['ph_business_categories'];
        $business_services = $row['ph_business_services'];
        $exp_business_services = explode(',', $business_services);
        $count_services = count($exp_business_services);
        $exp_business_photo = explode(',', $business_photo_name);
        $count_photo = count($exp_business_photo);
        $exp_business_photo_path = explode(',', $business_photo_path);
        $count_photo_path = count($exp_business_photo);
        //$exp_business_video_path = explode(',', $business_video_path);
        //$count_video_path = count($exp_business_video_path);
        
        
        //echo "<pre>";
        //print_r($exp_business_photo_path);
        
        ?>

        <!-- Page Title -->
	<section class="content_section white_section page_title has_bg_image member_header enar_parallax" style="background-image: url('<?php echo $business_cover_photo;?>');">
		<div class="content clearfix" style="margin-top: -120px;">
			<h1 class="" style="height: 100px;"><?php echo $business_name;?></h1>	
                        <div><h6 style="margin-top: 100px;font-family: Arial, sans-serif;font-size: 14px;"><?php echo strtoupper($business_city);?></h6></div>  
                        <div style="margin-top: -120px;"><h6 style="margin-top: 125px;font-family: Arial, sans-serif;font-size: 14px;"">Also Shoots in : <?php echo $business_regions;?></h6></div>
                        
                        <div>
                            <a class="main_button color2 medium_btn bottom_space" target="_self" href="#">
                                    CONTACT NOW
                            </a>
                        </div>
		</div>
           
	</section>
	<!-- End Page Title -->
        
               
        <div class="alert alert-danger margin-bottom-30"><!-- DANGER -->
            This is a preview of how your profile will look like.
        </div>
                            
	
            <!-- Tabs Container -->
                <div class="hm-tabs tabs2 fill_active">
                    <nav class="clearfix">
                            <ul class="tabs-navi">
                                <li><a data-content="photos" class="selected" href="#"><span></span>PHOTOS</a></li>
                                <li><a data-content="videos" href="#"><span></span>VIDEOS</a></li>
                                <li><a data-content="info" href="#"><span></span>INFO</a></li>
                                    
                                    <!--<li><a data-content="technology" href="#"><span></span>Assignments</a></li>-->
                            </ul>
                    </nav>

                        <ul class="tabs-body">
                            <li data-content="info">

                                    <!-- grid 6-->
				<div class="col-md-6">
					<h2 class="title1 upper">About</h2>
                                        <p><strong><?php echo $business_name;?></strong> is based out of <?php echo $business_city;?>, <?php echo $business_state;?>.<br /> 
We offer exclusive professional photography services in Wedding -  <?php echo $business_photostyle;?><br /> Wedding - <?php echo $business_categories;?></p><br />
					
                                        <h2 class="title1 upper">Web Address</h2>
					<p>Not Available</p><br />
                                        
                                        <h2 class="title1 upper">Address</h2>
                                        <p><?php echo $business_address;?><br />
                                        <?php echo $business_city;?> - <?php echo $business_pincode;?><br />
                                        <?php echo $business_state;?></p>
                                        
					<span class="spacer20"></span>
					<!-- Social Share-->
					<div>
						<div id="share_on_socials">
							<span class="social_share_btn">Share On :</span>
							
							<span class='st_facebook' displayText='Facebook'></span>
                                                        <span class='st_twitter' displayText='Tweet'></span>
                                                        <span class='st_linkedin' displayText='LinkedIn'></span>
                                                        <span class='st_pinterest' displayText='Pinterest'></span>
                                                        <span class='st_email' displayText='Email'></span>
							
						</div>
					</div>
					<!-- End Social Share-->
					<span class="spacer30"></span>					
				</div>
				<!-- End grid 6-->   
                                
                                
                                
                                 <!-- grid 6-->
				<div class="col-md-6">
					<h2 class="title1 upper">Languages Known</h2>
                                        <p><?php echo $business_languages;?></p><br />
					
                                        <h2 class="title1 upper">Product &amp; Services</h2>
                                        <ul class="list3 clearfix">
                                            <?php for($m=0;$m<$count_services-1;$m++){?>
                                            <li><?php echo $exp_business_services[$m];?></li>  
                                            <?php } ?>
                                        </ul>            
                                </div>
				<!-- End grid 6-->   
                                
                                

                                </li>

                                <li data-content="photos" class="selected">
                                    
                                    <div class="col-md-6">
                                        
                                        <h2 class="title1 upper">Price Starting from</h2>
                                        <h2><?php echo $business_starting_price;?></h2>
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        
                                        <h2 class="title1 upper">Categories</h2>
                                        <h6><?php echo $business_categories;?></h6>
                                        
                                    </div>
                                    
                                    <div class="col-md-8" style="margin-right: 1px;">    
                                    <div class="footer_row">
						
                                                 <?php for($i=0;$i<$count_photo_path-1;$i++){?>
						<div class="flickr_widget_block clearfix">
							<span class="flickr_badge_image">
								<a href="<?php echo $exp_business_photo_path[$i];?>" data-rel="magnific-popup">
									<img src="<?php echo $exp_business_photo_path[$i];?>" alt="Image Name" title="Flicker Image">
								</a>
							</span>
							<?php } ?>
						</div>
					</div>
                                </div>                      
                                    
                                </li>

                                <li data-content="videos">
                                        
                                    <!-- Videos displayed here -->
                                    <!-- grid 6-->
                                    <div class="col-md-6">
                                        
                                            <div class="bordered_content bordered">
                                                
                                                    <div class="embed-container">
                                                           <!-- <a class="hm_vid_con popup-vimeo" href="<?php echo $business_video_path;?>" data-rel="magnific-popup"></a>-->
                                                            
                                                            <?php echo $business_video_path;?>
                                                            <iframe width="560" height="315" src="<?php echo $business_video_path;?>" frameborder="0" allowfullscreen></iframe>                                    
                                                           
                                                    </div>
                                               
                                            </div>
                                    </div>
                                    <!-- End grid 6-->
                                    <!-- Displayed videos ends here -->
                                    
                                </li>

                                
                        </ul>
                </div>
			<!-- End Tabs Container -->
                        
                        
	


	
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