<header id="site_header">	

		<div class="topbar"><!-- class ( topbar_colored  ) -->
			<div class="content clearfix">
			
				<div class="top_details clearfix f_left">
					<?php if(!isset($_SESSION['id'])){ ?>
					<span class="top_login">
						<i class="icon ico-key3"></i><a href="SignIn.php">Login</a>
					</span>
					<?php } ?>
					<!-- <div class="zoom-anim-dialog small-dialog mfp-hide login_popup" id="login-popup">
						<form class="login_form_colored">
							<div class="lfc_user_row">
								<span class="lfc_header">Login to your Account</span>
							</div>
							<div class="lfc_user_row">
								<label for="login_user_name">
									<span class="lfc_alert"></span>
									<i class="lfc_icon ico-user5"></i>
									<input type="text" name="login_user_name" id="login_user_name">
								</label>
							</div>
							<div class="lfc_user_row">
								<label for="login_password">
									<span class="lfc_alert"></span>
									<i class="lfc_icon ico-key3"></i>
									<input type="password" name="login_password" id="login_password">
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
									<button type="submit" name="login" class="send_button f_right upper">
										Sign in
									</button>
								</div>
							</div>
							<a class="lfc_forget_pass" href="#">Forgot Your Password?</a>
						</form>
					</div> -->
					<span><i class="icon ico-phone5"></i><span class="title">Call Us :</span> (123) 456 - 7890</span>
					<?php if(isset($_SESSION['id'])){ ?>
					<span><i class="icon ico-user5"></i><span class="title"><strong>Hey, <?php echo $_SESSION['username'];?></strong></span></span>
					<?php }else{ ?>
					<span><i class="icon ico-comment2"></i><span class="title">Support :</span> (123) 456 - 7890</span>
					<?php } ?>
				</div>
			        
				<div class="top-socials box_socials f_right">
					<a href="#" target="_blank">
						<span class="soc_name">Facebook</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-facebook4"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Twitter</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-twitter4"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Google+</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-google-plus"></i>
					</a>     
					<a href="skype:#?call">
						<span class="soc_name">Skype</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-skype"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Picassa</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-picassa"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Vimeo</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-vimeo"></i>
					</a>
				 </div>
			</div>
			<!-- End content -->
			<span class="top_expande not_expanded">
				<i class="no_exp ico-angle-double-down"></i>
				<i class="exp ico-angle-double-up"></i>
			</span>
		</div>
		<!-- End topbar -->



		<div id="navigation_bar">
			<div class="content">
				<div id="logo">
					<a href="index.php">
						<!-- <img class="logo_dark" src="images/logo-dark.png" alt="Enar Logo">
						<img class="logo_light" src="images/logo-light.png" alt="Enar Logo"> -->
						<img src="images/logo.jpg" alt="Logo"  style="max-height: 60px;margin-top: -10px;"/>
					</a>
				</div>
				
								
				<!-- Top Search -->
				<form class="top_search clearfix small_top_search">
					<div class="top_search_con">
						<input type="text" class="s" placeholder="Search Here ...">
						<span class="top_search_icon"><i class="ico-search4"></i></span>
						<input type="submit" class="top_search_submit" >
					</div>
				</form>
				<!-- End Top Search -->				

				<?php require_once('Menu.php');?>
				
				<div class="clear"></div>
			</div>
		</div>
 	</header>
        <!-- End Main Header -->	
