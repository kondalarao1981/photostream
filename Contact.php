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
	<title>Contact Us | Fotogs - The Professional Photographers | Preserving Memories</title>
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
	<section class="content_section white_section page_title has_bg_image bg_header7 enar_parallax">
		<div class="content clearfix">
			<h1 class="">Contact Us</h1>
			<div class="breadcrumbs">
				
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Contact Us -->
	<section class="content_section">
		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				<div class="col-md-6">
					<h2 class="title1 upper"><i class="ico-pencil5"></i>Contact Information</h2>
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-location5"></i>
						</span>
						<div class="c_con">
							<span class="c_title">Address</span>
							<span class="c_detail">
								<span class="c_name">Main Office :</span>
								<span class="c_desc">NO.28 - 23 Street Name - City, Country</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Customer Center :</span>
								<span class="c_desc">NO.123 - 45 Street Name - City, Country</span>
							</span>
						</div>
					</div>
					
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-bubble4"></i>
						</span>
						<div class="c_con">
							<span class="c_title">Phone Numbers</span>
							<span class="c_detail">
								<span class="c_name">Main Office :</span>
								<span class="c_desc">+000 123 456 789</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Customer Support :</span>
								<span class="c_desc">+000 456 123 978</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Sales :</span>
								<span class="c_desc">+000 123 456 789</span>
							</span>
						</div>
					</div>
					
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-paperplane"></i>
						</span>
						<div class="c_con">
							<span class="c_title">Email Address</span>
							<span class="c_detail">
								<span class="c_name">Customer support :</span>
								<span class="c_desc">info@mail.com</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Technical support :</span>
								<span class="c_desc">support@mail.com</span>
							</span>
						</div>
					</div>
					
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-pen2"></i>
						</span>
						<div class="c_con">
							<span class="c_title">Other Datails</span>
							<span class="c_detail">
								<span class="c_name">Site Name :</span>
                                                                <span class="c_desc"><a href="http://www.fotogs.com">Fotogs - The Professional Photoraphers</a></span>
							</span>
						</div>
					</div>
				</div><!-- Grid -->
				
				<div class="col-md-6">
					<h2 class="title1 upper"><i class="ico-envelope3"></i>Get On Touch</h2>
                                        
                                        
                                        <?php

    /*********************** Code for Contact Form Starts ********************/
    
    if(isset($_POST['contact_us_submit'])){
        
        date_default_timezone_set('Asia/Calcutta');
        $name = ucwords($_POST['contact_us_name']);
        $email = $_POST['contact_us_mail'];
        $phone = $_POST['contact_us_phone'];
        $subject = $_POST['contact_us_subject'];
        $message = $_POST['contact_us_message'];
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $date = date('M d, Y h:i:s A');
        $status = '1';
        
        
        $feedback_sel = mysql_query("SELECT * FROM ph_feedback_info WHERE ph_feedback_user_email = '".$email."'");
        $data = mysql_fetch_array($feedback_sel);
        
        if($data > 0){
            
            ?>
                                        
                <div class="alert alert-border alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <strong><i class="fa fa-times"></i> Oops!</strong> Already Contacted with this email id!
                </div>
                                        
            <?php           
           
        }else{
            
            $feedback_inst = mysql_query("INSERT INTO ph_feedback_info(ph_feedback_user_name, ph_feedback_user_email, ph_feedback_user_phone, ph_feedback_user_subject, ph_feedback_message, ph_feedback_user_ip, ph_feedback_user_browser, ph_feedback_date, ph_feedback_status) VALUES('$name', '$email', '$phone', '$subject', '$message', '$ip_address', '$browser', '$date', '$status')");
            
            if($feedback_inst){
            
        ?>
                <div class="alert alert-border alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><i class="fa fa-check"></i> Success!</strong> Thank you for Contacting. Administrator will review and get back to you soon.
                </div>         
                
        <?php
                
            }else{
        ?>
                                        
                <div class="alert alert-border alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><i class="fa fa-warning"></i> Warning!</strong> Technical issues while registering.Try submitting again.
                    </div>
        <?php
              
            }              
        }       
    }
?>
                                        
                                        
                                        
                                        
                                        <form name="contact" class="hm_contact_form" action="Contact.php" method="post" onsubmit="return(validate());">
						<div class="form_row clearfix">
							<label for="contact-us-name">
								<span class="hm_field_name">Name</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact_us_name" id="contact-us-name" placeholder="Full Name" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-mail">
								<span class="hm_field_name">Email</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="email" name="contact_us_mail" id="contact-us-mail" placeholder="mail@sitename.com" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-phone">
								<span class="hm_field_name">Phone</span>
                                                                <span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact_us_phone" id="contact-us-phone" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-subject">
								<span class="hm_field_name">Subject</span>
                                                                <span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact_us_subject" id="contact-us-subject" required>
                                                        
						</div>
						
						<div class="form_row clearfix">
							<label for="contact-us-message">
								<span class="hm_field_name">Message</span>
								<span class="hm_requires_star">*</span>
							</label>
							<textarea class="form_fill_fields hm_textarea" name="contact_us_message" id="contact-us-message" required></textarea>
						</div>
						<div class="form_row clearfix">
							<input type="submit" class="send_button full_button" name="contact_us_submit" value="Send Your Message">
								
						</div>
						<!--<div class="form_row clearfix">
							<div id="form-messages"></div>
						</div>
						<div class="form_loader"></div>-->
					</form>
				</div><!-- Grid -->
			</div>
		</div>
	</section>
	<!-- End Contact Us -->
 
	
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
<script src="js/contact_validate.js" type="text/javascript"></script>

</body>


</html>