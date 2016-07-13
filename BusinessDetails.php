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



	<!-- Section -->
	<section class="content_section">
		<div class="content row_spacer clearfix">
			<div class="rows_container clearfix">
				<div class="col-md-8">
					
					<div class="main_title upper">
						<h2>
							<span class="line"><i class="ico-signup"></i></span>
							Let's Create Your
							<span class="main_title_c1">Profile</span>
						</h2>
					</div>
                                        
                                    <div class="main_title upper">
						<h2>
							<span class="line"><i class="ico-signup"></i></span>
							Business
							<span class="main_title_c1">Details</span>
						</h2>
                                    </div>            


				<form name="businessdetails" class="hm_contact_form full_contact_form" action="PortfolioDetails.php" method="post" onsubmit="return(bdvalidate());">						

						<div class="form_row clearfix">                                     
                                                    <div class="my_col_half">
							<label>
								<span class="hm_field_name"><strong>Specialization</strong></span>
							</label>
							<div class="checkbox_radio_con">
								<input type="radio" value="Still" name="ft_specialization" checked="yes">
                                                                <span>Still</span>
								<input type="radio" value="Video" name="ft_specialization">
								<span>Video</span>
                                                                <input type="radio" value="Still + Video" name="ft_specialization">
								<span>Still + Video</span>
                                                                
							</div>
                                                    </div>
                                                    
                                                    <div class="my_col_half">
							<label>
								<span class="hm_field_name"><strong>Photography Style</strong></span>
                                                                <span class="hm_requires_star">*</span>
							</label>
							<div class="checkbox_radio_con">
								<input type="checkbox" value="Traditional" name="ft_photo_style">
								<span>Traditional</span>
								<input type="checkbox" value="Candid" name="ft_photo_style">
								<span>Candid</span>					
							</div>
                                                    </div>
						</div>
                                    
                                    <div class="form_row clearfix">                                     
                                                    <div class="my_col_half">
							<label>
								<span class="hm_field_name"><strong>Approximate Starting Price</strong></span>
                                                                <span class="hm_requires_star">*</span>
							</label>
							<div class="my_col">
								
                                                                <input type="text" class="hm_input_text" name="ft_photo_price" id="ft_photo_price" placeholder="Photography Starting Price">
                                                                
							</div>
                                                    </div>
                                                    
                                                    <div class="my_col_half">
							<label>
								<span class="hm_field_name"><strong>Videography Price</strong></span>
                                                                <span class="hm_requires_star">*</span>
							</label>
							<div class="my_col">
								
                                                                <input type="text" class="hm_input_text" name="ft_video_price" id="ft_video_price" placeholder="Videography Starting Price">
                                                                
							</div>
                                                    </div>
						</div>
                                    
                                                <div class="form_row clearfix">                                     
                                                    <div class="my_col_half">
							<label>
								<span class="hm_field_name"><strong>Photo + Videography</strong></span>
                                                                <span class="hm_requires_star">*</span>
							</label>
							<div class="my_col">
								
                                                                <input type="text" class="hm_input_text" name="ft_photo_video_price" id="ft_photo_video_price" placeholder="Photography & Videography Starting Price">
                                                                
							</div>
                                                    </div>                                       
						</div>
                                    
						<div class="form_row clearfix">
							<div class="my_col_half">
                                                                <label for="address">
                                                                    <span class="hm_field_name"><strong>Categories Covered</strong></span>            
                                                                    <span class="hm_requires_star">*</span>
                                                                </label>
                                                            
								<label class="orderby_label">
                                                                    <select required="" name="ft_categories" id="ft_categories" class="shipping_country" multiple>
										<option value="Wedding">Wedding</option>
										<option value="Babies &amp; Kids">Babies &amp; Kids</option>
										<option value="Fashion &amp; Portfolio">Fashion &amp; Portfolio</option>
										<option value="Commercial">Commercial</option>
										<option value="Special Ocassion">Special Ocassion</option>
										<option value="Corporate Events">Corporate Events</option>
										<option value="Travel">Travel</option>
										<option value="Nature">Nature</option>                                                                                  </select>
								</label>
							</div> 
                                                        
                                                        <div class="my_col">
								<label for="mail">
									<span class="hm_field_name"><strong>Equipment</strong></span>									
								</label>
                                                                <div class="my_col_half">
                                                                        <label class="orderby_label">
                                                                            <select id="equipment_type" name="equipment_type" class="shipping_country" multiple="yes">
                                                                                        <option value="Photo Camera">Photo Camera</option>
                                                                                        <option value="Video Camera">Video Camera</option>
                                                                                        <option value="Lens">Lens</option>
                                                                                        <option value="Other">Other</option>

                                                                                </select>
                                                                        </label>

                                                                    <input type="text" class="hm_input_text" name="ft_model_specs" id="ft_model_specs" placeholder="Model/Specifications"><br /><small>(Write values seperated by comma's. Ex: Cannon, Nikon, 255mm etc)</small>

                                                                </div>
							</div>
							
						</div>
						
						<div class="form_row clearfix">
							<div class="my_col_half">
								<label for="mail">
                                                                    <span class="hm_field_name"><strong>Products &amp; services</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
                                                            <label class="orderby_label">
                                                                        <select required="" name="ft_products" id="ft_products" class="shipping_country" multiple>
                                                                        <option value="Blueray Disc">Blueray Disc</option>
                                                                        <option value="Brochure">Brochure</option>
                                                                        <option value="Calendar">Calendar</option>
                                                                        <option value="CD/DVD">CD/DVD</option>
                                                                        <option value="Cinematography">Cinematography</option>
                                                                        <option value="Coffee Mug">Coffee Mug</option>
                                                                        <option value="Coffee Table Book">Coffee Table Book</option>
                                                                        <option value="Documentary">Documentary</option>                                                                                <option value="Enlargement">Enlargement</option>
                                                                        <option value="Frames">Frames</option>
                                                                        <option value="HD Highlights">HD Highlights</option>
                                                                        <option value="HD Videos">HD Videos</option>
                                                                        <option value="Lamination">Lamination</option>
                                                                        <option value="Live Streaming">Live Streaming</option>
                                                                        <option value="Montage">Montage</option>
                                                                        <option value="Photo Boook">Photo Boook</option>
                                                                        <option value="Poster">Poster</option>
                                                                        <option value="Promo Videos">Promo Videos</option>
                                                                        <option value="Shortfilms">Shortfilms</option>
                                                                        <option value="T-Shirt">T-Shirt</option>
                                                                                
                                                                        </select>
								</label>
							</div>
							<div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>Payment Options</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
                                                            <label class="orderby_label">
                                                                    <select required="" name="ft_payment" id="ft_payment" class="shipping_country" multiple>
										<option value="Bank Transfer">Bank Transfer</option>
										<option value="Cash">Cash</option>
										<option value="Cheque">Cheque</option>
										<option value="Credit Card">Credit Card</option>
										<option value="Debit Card">Debit Card</option>
                                                                                                                                                                                                     </select>
								</label>
							</div>
						</div>
                                    
                                                <div class="form_row clearfix">
							<button type="submit" name="send" class="send_button full_button">
								<i class="ico-check3"></i>
								<span>Next</span>
							</button>
						</div>
						
					</form>
                                
                                </div>
				<!-- End Register Column -->


				<div class="col-md-4">
					<div class="main_title upper">
						<h2>
							<span class="line"><i class="ico-login"></i></span>
							Need
							<span class="main_title_c1"> Help?</span>
						</h2>
					</div>					
				
					<div class="lfc_user_row">
						<span class="lfc_header"><i class="icon ico-phone5"></i><span class="title">&nbsp;&nbsp;&nbsp;&nbsp;Call Us :</span> (123) 456 - 7890</span>
						<span class="lfc_header"><i class="icon ico-email"></i><span class="title">&nbsp;&nbsp;&nbsp;&nbsp;Mail Us :</span> <a href="mailto:info@fotogs.com">info@fotogs.com</a></span>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Section -->


	
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