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
							Portfolio
							<span class="main_title_c1">Details</span>
						</h2>
                                    </div>            
                                    
                                    
                                     <?php
                        
                        
                            if(isset($_POST['send'])){    
                                
                                //// Function to Convert File Size
					function ByteSize($bytes)  
			{ 
					$size = $bytes / 1024; 
					if($size < 1024) 
					{ 
						$size = number_format($size, 2); 
						$size .= 'KB'; 
					}  
					else  
				{ 
					if($size / 1024 < 1024)  
					{ 
						$size = number_format($size / 1024, 2); 
						$size .= 'MB'; 
					}  
					else if ($size / 1024 / 1024 < 1024)   
					{ 
						$size = number_format($size / 1024 / 1024, 2); 
						$size .= 'GB'; 
					}  
				} 
				return $size; 
                        }
                                        
                                      
                                date_default_timezone_set('Asia/Calcutta');
                                $business_name = $_POST['hid_business_name'];
                                $business_role =  $_POST['hid_business_role'];
                                $business_address = ucwords($_POST['hid_business_address']);
                                $business_address_area = ucwords($_POST['hid_business_address_area']);
                                $pincode = $_POST['hid_pincode'];
                                $city = ucwords($_POST['hid_city']);
                                $state = ucwords($_POST['hid_state']);
                                $regions_covered = $_POST['hid_regions'];
                                $languages_known = $_POST['hid_languages'];
                                $img_name = $_POST['hid_logo_name'];
                                $img_size = $_POST['hid_logo_size'];
                                $img_type = $_POST['hid_logo_type'];
                                $img_path = $_POST['hid_logo_path']; 
                                
                                
                                
                                $specialization = $_POST['ft_specialization'];
                                $photo_style = $_POST['ft_photo_style'];
                                foreach ($photo_style as $photo) {
                                    $nphoto_style .= $photo.',';
                                }
                                $app_starting_price = $_POST['ft_photo_price'];
                                $app_video_price = $_POST['ft_video_price'];
                                $app_photo_video_price = $_POST['ft_photo_video_price'];
                                $categories = $_POST['ft_categories'];
                                foreach ($categories as $cat) {
                                    $ncategories .= $cat.',';
                                }
                                $equipment_type = $_POST['equipment_type'];
                                foreach ($equipment_type as $equipment) {
                                    $nequipment .= $equipment.',';
                                }
                                $model_specs = $_POST['ft_model_specs'];
                                $products = $_POST['ft_products'];    
                                foreach ($products as $prod) {
                                    $nproducts .= $prod.',';
                                }
                                $payment = $_POST['ft_payment'];    
                                foreach ($payment as $pay) {
                                    $npayment .= $pay.',';
                                }
                                
                                $reg_date = date('M d, Y h:i:s A');
                                $status = 0;                                    
                                        
                                
                            }
                            
                            /*************** Profile Creation Starts Here **********/
                            
                            if(isset($_POST['finish'])){    
                                
                                //// Function to Convert File Size
					function ByteSize($bytes)  
			{ 
					$size = $bytes / 1024; 
					if($size < 1024) 
					{ 
						$size = number_format($size, 2); 
						$size .= 'KB'; 
					}  
					else  
				{ 
					if($size / 1024 < 1024)  
					{ 
						$size = number_format($size / 1024, 2); 
						$size .= 'MB'; 
					}  
					else if ($size / 1024 / 1024 < 1024)   
					{ 
						$size = number_format($size / 1024 / 1024, 2); 
						$size .= 'GB'; 
					}  
				} 
				return $size; 
                        }
                                        
                                // Create Profile Variables      
                                date_default_timezone_set('Asia/Calcutta');
                                $business_name = $_POST['business_name'];
                                $business_role =  $_POST['business_role'];
                                $business_address = $_POST['business_address'];
                                $business_address_area = $_POST['business_address_area'];
                                $pincode = $_POST['pincode'];
                                $city = $_POST['city'];
                                $state = $_POST['state'];
                                $regions_covered = $_POST['regions'];
                                $languages_known = $_POST['languages'];
                                $img_name = $_POST['logo_name'];
                                $img_size = $_POST['logo_size'];
                                $img_type = $_POST['logo_type'];
                                $img_path = $_POST['logo_path']; 
                                
                                
                                //Business Details Variables
                                $specialization = $_POST['specialization'];
                                $photo_style = $_POST['photo_style'];                                
                                $app_starting_price = $_POST['app_starting_price'];
                                $app_video_price = $_POST['app_video_price'];
                                $app_photo_video_price = $_POST['app_photo_video_price'];
                                $categories = $_POST['categories'];                               
                                $equipment = $_POST['equipment'];                                
                                $model_specs = $_POST['model_specs'];
                                $products = $_POST['products'];                               
                                $payment = $_POST['payment'];
                                
                                //Protfolio Details Variables
                                $cover_img_name = $_FILES['ft_cover_photo']['name'];
                                $cover_img_size = ByteSize($_FILES['ft_cover_photo']['size']);
                                $cover_img_type = $_FILES['ft_cover_photo']['type'];
                                $cover_img_path = $_FILES['ft_cover_photo']['tmp_name']; 
                                
                                // Desired folder structure
                                $structure = 'photographers/'.ucwords($business_name).'/Cover Photo/';
                                if(!is_dir($structure)){
                                   mkdir($structure, 0777, true);                                   
                                    $target = $structure;
                                    $new_target = $target . $cover_img_name;   
                                    $cover_photonew_target = $target . $cover_img_name;
                                    $moved_file = move_uploaded_file($cover_img_path, $new_target);
                                }                                  
                               
                                
                                if (isset($_FILES['ft_photos'])) {
                                    
                                    $photos = $_FILES['ft_photos'];
                                    $fileCount = count($photos['name']);
                                    
                                    for ($i = 0; $i < $fileCount; $i++) {
                                        
                                        $photo_img_name .= $photos['name'][$i].',';              
                                        $photo_img_path .= $photos['tmp_name'][$i]; 
                                        
                                        // Desired folder structure
                                    $structure = 'photographers/'.$business_name.'/Photos/';
                                    if(!is_dir($structure)){
                                        mkdir($structure, 0777, true);                                         
                                     } 
                                    $target = $structure;
                                    $new_target = $target . $photos['name'][$i];
                                    $photos_target_path .= $target . $photos['name'][$i].',';

                                    $moved_file = move_uploaded_file($photos['tmp_name'][$i], $new_target);
                    
                                    }          
                                    
                                }                    
                                
                                if (isset($_FILES['ft_videos'])) {
                                    
                                    $videos = $_FILES['ft_videos'];
                                    $fileCount = count($videos['name']);
                                    
                                    for ($i = 0; $i < $fileCount; $i++) {
                                        
                                        $video_name .= $videos['name'][$i].',';              
                                        $video_path .= $videos['tmp_name'][$i]; 
                                        
                                        // Desired folder structure
                                    $structure = 'photographers/'.$business_name.'/Videos/';
                                    if(!is_dir($structure)){
                                        mkdir($structure, 0777, true);                                         
                                     } 
                                     
                                     $target = $structure;
                                    $new_target = $target . $videos['name'][$i];
                                    $videos_target_path .= $target . $videos['name'][$i].',';

                                    $moved_file = move_uploaded_file($videos['tmp_name'][$i], $new_target);
                                    
                    
                                    }          
                                    
                                } 
                                
                                
                                
                                $reg_date = date('M d, Y h:i:s A');
                                $updated_date = date('M d, Y h:i:s A');
                                $status = 0;     
                                
                                $sel = mysql_query("SELECT * FROM ph_photographers_info WHERE ph_user_id = '".$_SESSION['id']."'");
                                $row = mysql_fetch_array($sel);
                                
                                if($row > 0){
                            ?>
                                 <div class="alert alert-border alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                       <strong><i class="fa fa-times"></i> Oops!</strong> You are allowed to create only one profile per account!
                                </div>   
                            <?php        
                                    
                                }else{
                                
                                
                                 $inst = mysql_query("INSERT INTO ph_photographers_info(ph_business_name, ph_business_role, ph_business_address, ph_business_address_area, ph_business_pincode, ph_business_city, ph_business_state, ph_business_regions, ph_business_languages, ph_business_logo_name, ph_business_logo_size, ph_business_logo_type, ph_business_logo_path, ph_business_specialization, ph_business_photostyle, ph_business_categories, ph_business_photography_price, ph_business_video_price, ph_business_photo_video_price, ph_business_equipment, ph_business_equipment_specs, ph_business_services, ph_business_payment_options, ph_business_cover_photo_name, ph_business_cover_photo_size, ph_business_cover_photo_type, ph_business_cover_photo_path, ph_business_photo_name, ph_business_photo_path, ph_business_video_name, ph_business_video_path, ph_user_id, ph_business_status, ph_business_reg_date, ph_business_updated_date)values('$business_name','$business_role', '$business_address','$business_address_area', '$pincode', '$city', '$state', '$regions_covered','$languages_known','$img_name', '$img_size', '$img_type', '$img_path', '$specialization', '$photo_style', '$categories', '$app_starting_price','$app_video_price','$app_photo_video_price','$equipment','$model_specs','$products','$payment','$cover_img_name','$cover_img_size','$cover_img_type','$cover_photonew_target','$photo_img_name','$photos_target_path','$video_name','$videos_target_path','".$_SESSION['id']."','$status','$reg_date','$updated_date')");
                        if($inst){
                    ?>
                                    
                        <div class="alert alert-border alert-success">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <strong><i class="fa fa-check"></i> Success!</strong> Thanks for submitting your profile. Administrator will review your profile and publish your account to receive full benefits.
                       </div>
                                    
                        <script type="text/JavaScript">                        
                        setTimeout("location.href = 'ManageProfile.php';",1500);            
                        </script>            
                                    
                    <?php                
                        }else{
                    ?>        
                            <div class="alert alert-border alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong><i class="fa fa-warning"></i> Warning!</strong> Technical issues while creating your profile. Try submitting again.
                            </div>   
                    <?php        
                        }            
                                }     
                            }
                            
                            /******** Ends Here *********/
                            
                     
                        ?>

                                    <form name="portfoliodetails" class="hm_contact_form full_contact_form" action="PortfolioDetails.php" method="post" enctype="multipart/form-data">						
                                    
                                                <div class="form_row clearfix">                                     
                                                    <div class="my_col">
							<label>
								<span class="hm_field_name"><strong>Cover Photo</strong></span>
                                                                
							</label>
							<div class="my_col">
								
                       <input type="file" class="hm_input_text" name="ft_cover_photo" id="ft_cover_photo" />
                                                                
							</div>
                                                    </div>                                              
						</div>
                                        
                                                <div class="form_row clearfix">                                     
                                                    <div class="my_col">
							<label>
								<span class="hm_field_name"><strong>Photos</strong></span>
                                                                
							</label>
							<div class="my_col">
								
          <input type="file" class="hm_input_text" name="ft_photos[]" multiple /> <br /><small>( Try selecting more than one photo or one, when browsing for photos )</small>                                                             
							</div>
                                                    </div>                                              
						</div>
                                    
                                                <div class="form_row clearfix">                                     
                                                    <div class="my_col">
							<label>
								<span class="hm_field_name"><strong>Videos</strong></span>
                                                                
							</label>
							<div class="my_col">
								
                          <input type="file" class="hm_input_text" name="ft_videos[]" id="ft_videos" multiple/> <br /><small>( Try selecting more than one video or one, when browsing for videos )</small>                                                              
							</div>
                                                    </div>                                       
						</div>
                                        
                                               
                                                <div class="form_row clearfix">
                                                    <input type="submit" name="finish" class="send_button full_button" value="Finish">
								<!--<i class="ico-check3"></i>
								<span>Finish</span>
							</button>-->
						</div>
                                                                              
                                        
              <input type="hidden" name="business_name" value="<?php echo $business_name;?>" />
              <input type="hidden" name="business_role" value="<?php echo $business_role;?>" />
              <input type="hidden" name="business_address" value="<?php echo $business_address;?>" />
        <input type="hidden" name="business_address_area" value="<?php echo $business_address_area;?>" />
              <input type="hidden" name="pincode" value="<?php echo $pincode;?>" />
              <input type="hidden" name="city" value="<?php echo $city;?>" />
              <input type="hidden" name="state" value="<?php echo $state;?>" />
              <input type="hidden" name="regions" value="<?php echo $regions_covered;?>" />
              <input type="hidden" name="languages" value="<?php echo $languages_known;?>" />
              <input type="hidden" name="logo_name" value="<?php echo $img_name;?>" />
              <input type="hidden" name="logo_size" value="<?php echo $img_size;?>" />
              <input type="hidden" name="logo_type" value="<?php echo $img_type;?>" />
              <input type="hidden" name="logo_path" value="<?php echo $img_path;?>" />
              
              
              <input type="hidden" name="specialization" value="<?php echo $specialization;?>" />
              <input type="hidden" name="photo_style" value="<?php echo $nphoto_style;?>" />
              <input type="hidden" name="app_starting_price" value="<?php echo $app_starting_price;?>" />
        <input type="hidden" name="app_video_price" value="<?php echo $app_video_price;?>" />
              <input type="hidden" name="app_photo_video_price" value="<?php echo $app_photo_video_price;?>" />
              <input type="hidden" name="categories" value="<?php echo $ncategories;?>" />
              <input type="hidden" name="equipment" value="<?php echo $nequipment;?>" />
              <input type="hidden" name="model_specs" value="<?php echo $model_specs;?>" />
              <input type="hidden" name="products" value="<?php echo $nproducts;?>" />
              <input type="hidden" name="payment" value="<?php echo $npayment;?>" />
						
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