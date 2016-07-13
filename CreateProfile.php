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
							Basic
							<span class="main_title_c1">Details</span>
						</h2>
                                    </div>


					
                


				<form name="createprofile" class="hm_contact_form full_contact_form" action="BusinessDetails.php" method="post" onsubmit="return(cpvalidate());" enctype="multipart/form-data">						

						<div class="form_row clearfix">
							<div class="my_col_half">
								<label for="first-name">
									<span class="hm_field_name"><strong>Studio/Business Name</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="hm_input_text" type="text" name="ft_business_name" id="business_name">
							</div>
                                                    
                                                    <div class="my_col_half">
							<label>
								<span class="hm_field_name"><strong>Role</strong></span>
							</label>
							<div class="checkbox_radio_con">
								<input type="radio" value="Freelancer" name="ft_role" checked="yes">
                                                                <span>Freelancer</span>
								<input type="radio" value="Full Time" name="ft_role">
								<span>Full Time</span>
							</div>
						</div>
							
						</div>
						<div class="form_row clearfix">
							<div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>Business Address</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="hm_input_text" type="text" name="ft_business_address" id="ft_business_address">
							</div>
                                                        
                                                        <div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>Business Address Area</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="hm_input_text" type="text" name="ft_business_address_area" id="ft_business_address_area">
							</div>
							
						</div>
						<div class="form_row clearfix">
							<label for="address">
								<span class="hm_field_name"><strong>Pincode</strong></span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="hm_input_text" type="text" name="ft_pincode" id="ft_pincode">
						</div>
						<div class="form_row clearfix">
							<div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>City living in</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
                                                            <input type="text" class="hm_input_text" name="ft_city" id="ft_city">
							</div>
							<div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>State</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
                                                            <input type="text" class="hm_input_text" name="ft_state" id="ft_state">
							</div>
						</div>

						<div class="form_row clearfix">
							
							<div class="my_col_half">
                                                                <label for="address">
                                                                    <span class="hm_field_name"><strong>Regions Covered</strong></span>
                                                                    <span class="hm_requires_star">*</span>
                                                                </label>
                                                            
								<label class="orderby_label">
                                                                    <select required="" name="ft_regions_covered" id="ft_regions_covered" class="shipping_country" multiple>
										<option value="All Over World">All Over World</option>
										<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
										<option value="Arunachal Pradesh">Arunachal Pradesh</option>
										<option value="Assam">Assam</option>
										<option value="Bihar">Bihar</option>
										<option value="Central India">Central India</option>
										<option value="Chandigarh">Chandigarh</option>
										<option value="Chhattisgarh">Chattisgarh</option>
										<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
										<option value="Daman and Diu">Daman and Diu</option>
										<option value="East India">East India</option>
										<option value="Goa">Goa</option>
										<option value="Gujarat">Gujarat</option>
                                                                                <option value="Haryana">Haryana</option>
                                                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                                <option value="Jharkand">Jharkand</option>
                                                                                <option value="Karnataka">Karnataka</option>
                                                                                <option value="Kerela">Kerela</option>
                                                                                <option value="Lakshadweep">Lakshadweep</option>
                                                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                                <option value="Maharashtra">Maharashtra</option>
                                                                                <option value="Manipur">Manipur</option>
                                                                                <option value="Meghalaya">Meghalaya</option>
                                                                                <option value="Mizoram">Mizoram</option>
                                                                                <option value="Nagaland">Nagaland</option>
                                                                                <option value="NCR">NCR</option>
                                                                                <option value="North East India">North East India</option>
                                                                                <option value="North India">North India</option>
                                                                                <option value="North West India">North West India</option>
                                                                                <option value="Odisha">Odisha</option>
                                                                                <option value="Puducherry">Puducherry</option>
                                                                                <option value="Punjab">Punjab</option>
                                                                                <option value="Rajasthan">Rajasthan</option>
                                                                                <option value="Sikkim">Sikkim</option>
                                                                                <option value="South East India">South East India</option>                 
                                                                                <option value="South India">South India</option>
                                                                                <option value="South West India">South West India</option>
                                                                                <option value="Tamilnadu">Tamilnadu</option>
                                                                                <option value="Telengana">Telengana</option>
                                                                                <option value="Tripura">Tripura</option>
                                                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                                <option value="Uttarakhand">Uttarakhand</option>
                                                                                <option value="West Bengal">West Bengal</option>
                                                                                <option value="West India">West India</option>
                                                                                
                                                                        </select>
								</label>
							</div>
                                                    
                                                        <div class="my_col_half">
                                                                <label for="address">
                                                                    <span class="hm_field_name"><strong>Languages Known</strong></span>                                                                    
                                                                </label>
                                                            
								<label class="orderby_label">
                                                                    <select required="" name="ft_languages_known" id="ft_languages_known" class="shipping_country" multiple>
										<option value="Arabic">Arabic</option>
										<option value="Assamese">Assamese</option>
										<option value="Bengali">Bengali</option>
										<option value="Bhojpuri">Bhojpuri</option>
										<option value="Bodo">Bodo</option>
										<option value="Chattisgarhi">Chattisgarhi</option>
										<option value="Dogri">Dogri</option>
										<option value="English">English</option>
										<option value="French">French</option>
										<option value="Garhwali">Garhwali</option>
										<option value="German">German</option>
										<option value="Gujarati">Gujarati</option>
										<option value="Haryanvi">Haryanvi</option>
                                                                                <option value="Hindi">Hindi</option>
                                                                                <option value="Kannada">Kannada</option>
                                                                                <option value="Kashmiri">Kashmiri</option>
                                                                                <option value="Khasi">Khasi</option>
                                                                                <option value="Konkani">Konkani</option>
                                                                                <option value="Kumaoni">Kumaoni</option>
                                                                                <option value="Kutchi">Kutchi</option>
                                                                                <option value="Maithili">Maithili</option>
                                                                                <option value="Malayalam">Malayalam</option>
                                                                                <option value="Manipuri">Manipuri</option>
                                                                                <option value="Marathi">Marathi</option>
                                                                                <option value="Marwadi">Marwadi</option>
                                                                                <option value="Mizo">Mizo</option>
                                                                                <option value="Nagamese">Nagamese</option>
                                                                                <option value="Nepali">Nepali</option>
                                                                                <option value="Oriya">Oriya</option>
                                                                                <option value="Pahari">Pahari</option>
                                                                                <option value="Punjabi">Punjabi</option>
                                                                                <option value="Rajasthani">Rajasthani</option>
                                                                                <option value="Sanskrit">Sanskrit</option>
                                                                                <option value="Santhali">Santhali</option>
                                                                                <option value="Sindhi">Sindhi</option>
                                                                                <option value="Spanish">Spanish</option>                                                                                       <option value="Tamil">Tamil</option>
                                                                                <option value="Telugu">Telugu</option>
                                                                                <option value="Urdu">Urdu</option>
                                                                                                                   
                                                                        </select>
								</label>
							</div>                                        
						</div>
                                    
                                                <div class="form_row clearfix">
							<div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>Business Logo</strong></span>									
								</label>
                                                            <input type="file" class="hm_input_text" name="ft_business_logo" id="ft_business_logo">
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