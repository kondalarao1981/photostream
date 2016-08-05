<nav id="main_nav">
					<div id="nav_menu">
						<span class="mobile_menu_trigger">
						    <a href="#" class="nav_trigger"><span></span></a>
						</span>		
						<ul id="navy" class="clearfix">
							<li class="normal_menu mobile_menu_toggle current_page_item">
								<a href="index.php"><span>Home</span></a>							
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="About.php"><span>About</span></a>								
							</li>				
							<li class="normal_menu mobile_menu_toggle">
								<a href="Blog.php"><span>Blog</span></a>								
							</li>
							
							<li class="normal_menu mobile_menu_toggle">
								<a href="Contact.php"><span>Contact</span></a>								
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="Events.php"><span>Events</span></a>								
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="shop.html"><span>Pay Now</span></a>								
							</li>
							<?php if(isset($_SESSION['id'])){ ?>
								<li class="normal_menu mobile_menu_toggle">
									<a href="#"><span>My Account</span></a>	
									<?php 							

											if($_SESSION['account'] == 'Non-Photographer'){

									?>
											<ul>
											<li class="normal_menu"><a href="AccountOverview.php">Account Overview</a></li>
											<li class="normal_menu"><a href="ChangePassword.php">Change Password</a></li>
											<li class="normal_menu"><a href="ManageAccount.php">Manage Account</a></li>
											<li class="normal_menu"><a href="MyActivity.php">My Activity</a></li>
											<li class="normal_menu"><a href="MyAssignments.php">My Assignments</a></li>	
											<li class="normal_menu"><a href="PhotographersContacted.php">Photographers I Contacted</a></li>
											<li class="normal_menu"><a href="Signout.php"><span class="menu_special_color">Signout</span></a></li>
										</ul>	
									<?php

											}elseif ($_SESSION['account'] == 'Photographer'){

									?>
											<ul>
                                                                                        <li class="normal_menu"><a href="ManageAccount.php">Manage Account</a></li>
											
											<li class="normal_menu"><a href="ChangePassword.php">Change Password</a></li>
											
											<li class="normal_menu"><a href="Signout.php"><span class="menu_special_color">Signout</span></a></li>
										</ul>	
									
									<?php	}	?>				
												
								</li>
							<?php }else{ ?>
							<li class="normal_menu mobile_menu_toggle">
								<a href="SignIn.php"><span>SignIn</span></a>								
							</li>
							<?php } ?>
							
						</ul>
					</div>
</nav>
				<!-- End Nav -->	