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
							New customer?
							<span class="main_title_c1">Register Now.</span>
						</h2>
					</div>


					<?php
            
           
            if(isset($_POST['send'])){
                
                date_default_timezone_set('Asia/Calcutta');
                $account_type = $_POST['ft_photographer'];
               $username = $_POST['ft_your_name'];
               $email = $_POST['ft_email'];
               $mobile = $_POST['ft_mobile'];
               $enc_password = sha1($_POST['ft_password']);
               
               //$enc_password = sha1($_POST['password']);
               
               $status = 0;
               $reg_date = date('M d, Y h:i:s A');
               $updated_date = date('M d, Y h:i:s A');   

               //exit();                     
               
               if(empty($_SESSION['6_letters_code'] ) || strcmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
		{
			//Note: the captcha code is compared case insensitively.
			//if you want case sensitive match, update the check above to
			// strcmp()
			?>
            
                <div class="alert alert-border alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <strong><i class="fa fa-times"></i> Error!</strong> Verification Code Doesnot Match.
                </div>
                
            <?php
		}else{
                
           
		
		       ///////// Query to check for duplication of users          
                    $sel = mysql_query("SELECT ph_user_email FROM ph_users_info WHERE ph_user_email = '$email'");
                    
                    ///// Fetch the data from Database
                    $data = mysql_fetch_array($sel);
                    
                    ////Condition to Check whether there is a duplicate record 
                    if($data > 0){
                
		  ?>
          
                <div class="alert alert-border alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <strong><i class="fa fa-times"></i> Oops!</strong> Username / Email Already Exists!
                </div>
                
          <?php
                   }else{
                            $inst = mysql_query("INSERT INTO ph_users_info(ph_user_account_type, ph_user_name, ph_user_email, ph_user_mobile, ph_user_password, ph_user_status, ph_user_reg_date, ph_user_updated_date) VALUES('$account_type', '$username', '$email', '$mobile', '$enc_password', '$status', '$reg_date', '$updated_date')");
                            
                            
                             /**************** Sending a Mail to activate the account *************/
									
					$to = $email;
					$subject   = "Fotogs Account Activation";
					$from      = "Fotogs - The Professional Photographers <info@fotogs.com>";
					$headers   = "From: " . $from . "\r\n";
					$headers  .= "MIME-Version: 1.0\r\n";
					$headers  .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					
					$message  = '<html><head><title></title></head><body>';
					$message .= '<p style="font-family:Verdana;font-size:12px;">Thank You For Registering With Fotogs - The Professional Photographers.</p>';
					
					$message .= "<p style='font-family:Verdana;font-size:12px;'>Please 
					<a href='http://photostream.ishwaryas.com/Accountactivation.php?type=activation&account=$account_type&email=$email&action=verify'>Click Here</a> to activate your account on Fotogs</p>";
													
					$message .= '<p style="font-family:Verdana;font-size:12px;">Your Login Email :'.' '. $email .'</p>';
					$message .= '<br />';
					$message .= '<p style="font-family:Verdana;font-size:12px;">Note - This is a System Generated Mail, please do not reply.</p>';
					$message .= '</body></html>';
																		
					$sent = mail($to,$subject,$message,$headers);            
				    
                            
                            
                       if($sent){
                ?>
                
                    <div class="alert alert-border alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><i class="fa fa-check"></i> Success!</strong> Please check your email and activate your account. Without activation you cannot Login.
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
                }
        
                ?>
                


				<form name="signup" class="hm_contact_form full_contact_form" action="SignIn.php" method="post" onsubmit="return(validate());">

						<div class="form_row clearfix">
							<label>
								<span class="hm_field_name"><strong>Photographer Type</strong></span>
							</label>
							<div class="checkbox_radio_con">
								<input type="radio" value="Non-Photographer" name="ft_photographer" checked="yes">
								<span>I'm Looking For a Photographer</span>
								<input type="radio" value="Photographer" name="ft_photographer">
								<span>I'm a Photographer</span>
							</div>
						</div>

						<div class="form_row clearfix">
							<div class="my_col">
								<label for="first-name">
									<span class="hm_field_name"><strong>Your Name</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="hm_input_text" type="text" name="ft_your_name" id="ft_your_name">
							</div>
							
						</div>
						<div class="form_row clearfix">
							<div class="my_col">
								<label for="mail">
									<span class="hm_field_name"><strong>Email Id</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="hm_input_text" type="text" name="ft_email" id="ft_email">
							</div>
							
						</div>
						<div class="form_row clearfix">
							<label for="address">
								<span class="hm_field_name"><strong>Mobile Number</strong></span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="hm_input_text" type="text" name="ft_mobile" id="ft_mobile" maxlength="10">
						</div>
						<div class="form_row clearfix">
							<div class="lfc_user_row">
								<label for="login_password">
									<span class="hm_field_name"><strong>Password</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input type="password" name="ft_password" id="ft_password">
							</div>
							<div class="lfc_user_row">
								<label for="login_password">
									<span class="hm_field_name"><strong>Confirm Password</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input type="password" name="ft_confirm_password" id="ft_confirm_password">
							</div>
						</div>

						<div class="form_row clearfix">
							<label for="address">
								<span class="hm_field_name"><strong>Verification Code</strong></span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="hm_input_text" type="text" name="6_letters_code" id="6_letters_code">
						</div>
									
						
						<div class="form_row clearfix">
							<!-- <div class="g-recaptcha" id="ft_recaptcha" data-sitekey="6Ldb7iITAAAAAEhBBuD3SCJAhy8wTeiZC9koC9qQ"></div> -->		

							<div class="form-group">
                                    <a href='javascript: refreshCaptchaimg();' style="text-decoration: none;"><img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captcha_img' />&nbsp;Click Here</a> to Refresh
                            </div>

						</div>

						<div class="form_row clearfix">
							<button type="submit" name="send" class="send_button full_button">
								<i class="ico-check3"></i>
								<span>REGISTER</span>
							</button>
						</div>
						
					</form>

					<script language='JavaScript' type='text/javascript'>
	    				function refreshCaptchaimg()
	    				{
	    					var img = document.images['captcha_img'];
	    					img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
	    				}
					</script>

				</div>
				<!-- End Register Column -->


				<div class="col-md-4">
					<div class="main_title upper">
						<h2>
							<span class="line"><i class="ico-login"></i></span>
							Sign
							<span class="main_title_c1"> in</span>
						</h2>
					</div>

					<?php
            
                if(isset($_POST['login_submit'])){                   
                  
                    
                    $email = $_POST['login_email'];
                    $password = sha1($_POST['login_password']);
                    $account_type = $_POST['login_account_type'];
                    
                    
                    $slt = mysql_query("SELECT ph_user_id, ph_user_account_type, ph_user_name, ph_user_email, ph_user_password, ph_user_status FROM ph_users_info WHERE ph_user_email = '$email' AND ph_user_password = '$password' AND ph_user_account_type = '$account_type'");
                    $fth = mysql_fetch_array($slt);

                    if($fth == 0){

                 ?>

                 		<div class="alert alert-border alert-danger">
	                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                       <strong><i class="fa fa-times"></i> Error!</strong> Incorrect User Account Type.
                   		</div>
                 <?php
                    }
                    
                    else{
                    
                    $login_id = $fth['ph_user_id'];
                    $login_account_type = $fth['ph_user_account_type'];
                    $login_uname = $fth['ph_user_name'];
                    $login_email = $fth['ph_user_email'];
                    $login_pwd = $fth['ph_user_password'];
                    $login_status = $fth['ph_user_status'];
                    
                    if(($email == $login_email) && ($password == $login_pwd) && ($login_status == 1) && 
                    	($login_account_type == 'Non-Photographer')){
                       
                        $_SESSION['username'] = $login_uname;
                        $_SESSION['email'] = $login_email;
                        $_SESSION['id'] = $login_id;      
                        $_SESSION['account_type'] = $login_account_type;                     
                        $_SESSION['account'] = $account_type;
                        
                        
                        echo "<script>";
                        echo "location.replace('MyActivity.php');";
                        echo "</script>";           
                        
                        
                    }
                    elseif (($email == $login_email) && ($password == $login_pwd) && ($login_status == 1) && 
                    	($login_account_type == 'Photographer')) {
                    	

                    	$_SESSION['username'] = $login_uname;
                        $_SESSION['email'] = $login_email;
                        $_SESSION['id'] = $login_id;   
                        $_SESSION['account_type'] = $login_account_type;   
                        $_SESSION['account'] = $account_type;               
                        
                        
                        echo "<script>";
                        echo "location.replace('CreateProfile.php');";
                        echo "</script>"; 

                    }

                    elseif(($email != $login_email) || ($password != $login_pwd)){
            ?>
            
                     <div class="alert alert-border alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <strong><i class="fa fa-times"></i> Error!</strong> Incorrect Username and Password.
                    </div>
                    
            <?php
                        }else{
             ?>
                    
                     <div class="alert alert-border alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <strong><i class="fa fa-times"></i> Error!</strong> Only activated users able to login. Please check your email and activate your account.
                    </div>
             
             <?php 
                        }

                       }
                    }
            ?>

				<form name="signin" class="login_form_colored" action="SignIn.php" method="post" onsubmit="return(svalidate());">
						<div class="lfc_user_row">
							<span class="lfc_header">Login to your Account</span>
						</div>
						<div class="lfc_user_row">
							<label for="login_user_name">
								<span class="lfc_alert"></span>
								<i class="lfc_icon ico-user5"></i>
								<input type="text" name="login_email" id="login_email" placeholder="E-Mail Id">
							</label>
						</div>
						<div class="lfc_user_row">
							<label for="login_password">
								<span class="lfc_alert"></span>
								<i class="lfc_icon ico-key3"></i>
								<input type="password" name="login_password" id="login_password" placeholder="Password">
							</label>	
						</div>
						<div class="lfc_user_row">
							<label class="orderby_label">
							<select class="form_fill_fields shipping_country" name="login_account_type">
									<option value="0">Select Account ---</option>
									<option value="Non-Photographer">I'm Looking For a Photographer</option>
									<option value="Photographer">I'm a Photographer</option>
							</select>
							</label>
						</div>
						<div class="lfc_user_row clearfix">
							<div class="my_col_half">
								<label for="rememberme">
									<span class="remember-box">
										<input type="checkbox" id="rememberme" name="rememberme">
										<span>Remember me</span>
									</span>
								</label>
							</div>
							<div class="my_col_half clearfix">
								<button type="submit" name="login_submit" class="send_button f_right upper">
									Sign in
								</button>
							</div>
						</div>
						<a class="lfc_forget_pass" href="ForgotPassword.php">Forgot Your Password?</a>
					</form>

					

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