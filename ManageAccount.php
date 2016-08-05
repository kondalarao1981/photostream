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
        
        if(isset($_SESSION['id'])){
        
            /*********** Fetching the data for profile information **********/
        
        $sel = mysql_query("SELECT * FROM ph_photographers_info WHERE ph_user_id = '".$_SESSION['id']."'");
        $row = mysql_fetch_array($sel);   
        
        $business_cover_photo = $row['ph_business_cover_photo_path'];
        $business_name = $row['ph_business_name'];
        $business_role = $row['ph_business_role'];
        $business_address = $row['ph_business_address'];
        $business_address_area = $row['ph_business_address_area'];
        $business_pincode = $row['ph_business_pincode'];
        $business_city = $row['ph_business_city'];
        $business_state = $row['ph_business_state'];
        $business_regions = $row['ph_business_regions'];
        $exp_business_regions = explode(',', $business_regions);
        $count_business_regions = count($exp_business_regions);     
        $business_languages = $row['ph_business_languages'];
        $exp_business_languages = explode(',', $business_languages);
        $count_business_languages = count($exp_business_languages); 
        $business_logo_name = $row['ph_business_logo_name'];
        $business_logo_size = $row['ph_business_logo_size'];
        $business_logo_type = $row['ph_business_logo_type'];
        $business_logo_path = $row['ph_business_logo_path'];     
        $business_status = $row['ph_business_status'];
        
            if($business_logo_path == "" || $business_logo_name == ""){                        
                    $business_logo_path = "users_profile_pics/default.jpg";
                }                           
                            
        }                
        
        
                    
                    ?>

        <!-- Page Title -->
	<section class="content_section white_section page_title has_bg_image member_header enar_parallax" style="background-image: url('<?php echo $business_cover_photo;?>');">
		<div class="content clearfix">
			<h1 class=""><?php echo $business_name;?></h1>			
		</div>
	</section>
	<!-- End Page Title -->
        <br /><br />
        
        
        <h2 class="title1 upper" style="margin-left: 67px;">Manage Account</h2><br />
        
        <?php
        
         /*************** Basic Details Updation Starts Here **********/
                            
                            if(isset($_POST['save'])){    
                                
                                
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
                                $business_name = $_POST['ft_business_name'];
                                $business_role =  $_POST['ft_role'];
                                $business_address = $_POST['ft_business_address'];
                                $business_address_area = $_POST['ft_business_address_area'];
                                $pincode = $_POST['ft_pincode'];
                                $city = $_POST['ft_city'];
                                $state = $_POST['ft_state'];
                                $regions_covered = $_POST['ft_regions_covered'];
                                $languages_known = $_POST['ft_languages_known'];
                                $img_name = $_FILES['ft_business_logo']['name'];
                                $img_size = ByteSize($_FILES['ft_business_logo']['size']);
                                $img_type = $_FILES['ft_business_logo']['type'];
                                $img_path = $_FILES['ft_business_logo']['tmp_name'];                   
                                $updated_date = date('M d, Y h:i:s A');
                                
                                if($img_name == ""){
                                    $img_name = $business_logo_name;
                                }else{
                                    $img_name = $_FILES['ft_business_logo']['name'];
                                }
                                
                                if($img_size == 0){
                                    $img_size = $business_logo_size;
                                }else{
                                    $img_size = ByteSize($_FILES['ft_business_logo']['size']);
                                }                     
                        
                                if($img_type == ""){
                                    $img_type = $business_logo_type;
                                }else{
                                    $img_type = $_FILES['ft_business_logo']['type'];
                                }
                                
                                foreach ($regions_covered as $regions) {
                                    $nregions .= $regions.',';
                                }
                                foreach ($languages_known as $languages) {
                                    $nlanguages .= $languages.',';
                                }
                                             
                                 $nregions_covered = $nregions;                                
                                 $nlanguages_known = $nlanguages;  
                                 
                                 $structure = 'photographers/'.ucwords($business_name).'/Logo/';                      
                                 $target = $structure;
                                 $new_target = $target . $img_name;                    
                                 
                            
                $update = mysql_query("UPDATE ph_photographers_info SET ph_business_role = '$business_role',  ph_business_address = '$business_address', ph_business_address_area = '$business_address_area', ph_business_pincode = '$pincode', ph_business_city = '$city', ph_business_state = '$state', ph_business_regions = '$nregions_covered', ph_business_languages = '$nlanguages_known', ph_business_logo_name = '$img_name', ph_business_logo_size= '$img_size',  ph_business_logo_type = '$img_type', ph_business_logo_path = '$new_target' WHERE ph_user_id = '".$_SESSION['id']."'");   
                
                $moved_file = move_uploaded_file($img_path, $new_target);
                
                if($update){                            
                            
                    ?>
                           <script>
                            alert('Changes Saved successfully. These will reflect in your profile post verification by our team.');   
                            location.replace('ManageAccount.php');
                            </script>
                        
                        <!--<div class="alert alert-border alert-success">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <strong><i class="fa fa-check"></i> Success!</strong> Changes Saved successfully. These will reflect in your profile post verification by our team.
                       </div>-->
                                   
                                    
                    <?php                
                        }else{
                    ?>        
                            <div class="alert alert-border alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong><i class="fa fa-warning"></i> Warning!</strong> Technical issues while Updating your Details. Try submitting again.
                            </div>   
                    <?php        
                        }        
                    }  
                            /******** Ends Here *********/    
                    ?>
        <!-- Tabs Container -->
        <div class="hm-tabs tabs1 ver_tabs upper_title" style="width: 90%;">
				<nav>
					<ul class="tabs-navi">
						<li><a data-content="basic" class="selected" href="#">Basic Details</a></li>
						<li><a data-content="business" href="#">Business Details</a></li>
						<li><a data-content="account" href="#">Account Details</a></li>
					</ul>
				</nav>
		    
				<ul class="tabs-body">
					<li data-content="basic" class="selected">
						
                                            
                                            <!-- Section -->
            <section class="content_section">
		<div class="content row_spacer clearfix">
			<div class="rows_container clearfix" style="margin-top: -87px;">
				<div class="col-md-12">					
                                        
                                    <div class="main_title upper">
						<h2>
							<span class="line"><i class="ico-signup"></i></span>
							Basic
							<span class="main_title_c1">Details</span>
						</h2>
                                    </div>
                                    
       
                                    <form name="basicdetails" class="hm_contact_form full_contact_form" action="ManageAccount.php" method="post" enctype="multipart/form-data">						

						<div class="form_row clearfix">
							<div class="my_col_half">
								<label for="first-name">
									<span class="hm_field_name"><strong>Studio/Business Name</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
                                                            <input class="hm_input_text" type="text" name="ft_business_name" id="business_name" value="<?php echo $business_name;?>" readonly="readonly">
							</div>
                                                    
                                                    <div class="my_col_half">
							<label>
								<span class="hm_field_name"><strong>Role</strong></span>
							</label>
							<div class="checkbox_radio_con">
								<input type="radio" value="Freelancer" name="ft_role" checked="yes" <?php echo ($business_role == 'Freelancer') ? "checked" : ""; ?>>
                                                                <span>Freelancer</span>
								<input type="radio" value="Full Time" name="ft_role" <?php echo ($business_role == 'Full Time') ? "checked" : "" ;?>>
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
								<input class="hm_input_text" type="text" name="ft_business_address" id="ft_business_address" value="<?php echo $business_address;?>">
							</div>
                                                        
                                                        <div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>Business Address Area</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="hm_input_text" type="text" name="ft_business_address_area" id="ft_business_address_area" value="<?php echo $business_address_area;?>">
							</div>
							
						</div>
						<div class="form_row clearfix">
							<label for="address">
								<span class="hm_field_name"><strong>Pincode</strong></span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="hm_input_text" type="text" name="ft_pincode" id="ft_pincode" value="<?php echo $business_pincode;?>">
						</div>
						<div class="form_row clearfix">
							<div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>City living in</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
                                                            <input type="text" class="hm_input_text" name="ft_city" id="ft_city" value="<?php echo $business_city;?>">
							</div>
							<div class="my_col_half">
								<label for="mail">
									<span class="hm_field_name"><strong>State</strong></span>
									<span class="hm_requires_star">*</span>
								</label>
                                                            <input type="text" class="hm_input_text" name="ft_state" id="ft_state" value="<?php echo $business_state;?>">
							</div>
						</div>

						<div class="form_row clearfix">
							
							<div class="my_col_half">
                                                                <label for="address">
                                                                    <span class="hm_field_name"><strong>Regions Covered</strong></span>
                                                                    <span class="hm_requires_star">*</span>
                                                                </label>
                                                            
								<label class="orderby_label">
                                                                    <select required="" name="ft_regions_covered[]" id="ft_regions_covered" class="shipping_country" multiple>
                                                                        <?php
                                                                        
                                                                for($i=0;$i<$count_business_regions-1;$i++){
                                                                    $new_business_regions = $exp_business_regions[$i];
                                                                ?>
                                                                        <option value="<?php echo $new_business_regions;?>" selected="selected"><?php echo $new_business_regions;?></option>
                                                                <?php        
                                                                }                                                           
                                                                        ?>
                                                                        <option value="All Over World">All Over World</option>
										<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
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
                              <select required="" name="ft_languages_known[]" id="ft_languages_known" class="shipping_country" multiple>
                                  <?php
                                                                        
                                        for($j=0;$j<$count_business_languages-1;$j++){
                                            $new_business_languages = $exp_business_languages[$j];
                                        ?>
                                                <option value="<?php echo $new_business_languages;?>" selected="selected"><?php echo $new_business_languages;?></option>
                                  <?php        
                                       }                                                           
                                  ?>
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
                                                    
                                                    <div class="my_col_half">
                                                        <img src="<?php echo $business_logo_path;?>" width="100" height="100"/>
                                                    </div>                                        
                                                    
						</div>		

						<div class="form_row clearfix">                              
                                                    <input type="submit" name="save" class="send_button" value="Save">
								
                                                    <input type="reset" name="discard" class="send_button" value="Discard Changes">								
						</div>
						
					</form>
                                
                                </div>
				<!-- End Register Column -->
                        </div>
		</div>
	</section>
	<!-- End Section -->
                                            
                                            
                                            
                                            
					</li>
				
					<li data-content="business">
						<p>New Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.</p>
				
						<p>New Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.</p>
					</li>
				
					<li data-content="account">
						<p>Gallery Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque tenetur aut, cupiditate, libero eius rerum incidunt dolorem quo in officia.</p>
				
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa vero, culpa doloremque voluptatum consectetur mollitia, atque expedita unde excepturi id, molestias maiores delectus quos molestiae. Ab iure provident adipisci eveniet quisquam ratione libero nam inventore error pariatur optio facilis assumenda sint atque cumque, omnis perspiciatis. Maxime minus quam voluptatum provident aliquam voluptatibus vel rerum. Soluta nulla tempora aspernatur maiores! Animi accusamus officiis neque exercitationem dolore ipsum maiores delectus asperiores reprehenderit pariatur placeat, quaerat sed illum optio qui enim odio temporibus, nulla nihil nemo quod dicta consectetur obcaecati vel. Perspiciatis animi corrupti quidem fugit deleniti, atque mollitia labore excepturi ut.</p>
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