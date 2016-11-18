<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-right">
				<ul>
					<?php if(isset($_SESSION['userid'])){
					?>	<li class="dropdown head-dpdn">
						<a href="<?php echo base_url();?>Basic_controller/user_profile" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
						</li>
						<li class="dropdown head-dpdn">
						<a href="<?php echo base_url();?>Basic_controller/user_logout" aria-expanded="false"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
						</li>
					<?php 
					}else{?>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url();?>Login/login" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url();?>Login/newuser" aria-expanded="false"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
					</li>
					<?php }?>
					
					<li class="dropdown head-dpdn">
						<div class="header-right">			
						<!-- ANDROID APP MODAL -->
								<div class="agile-its-selectregion">
									<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
									<i class="fa fa-download" aria-hidden="true"></i>Download Mobile App </button>
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
										aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
															&times;</button>
															<span style="color: green;">COMING SOON !</span>
													</div>
												</div>
											</div>
										</div>
								</div>
						</div>
					</li>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url();?>help"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
					
				</ul>
			</div>
			
			
			
			<div class="clearfix"> </div> 
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-lg-4 col-md 12">	
					<div style="margin-left: 0px;margin-right: 0px;">
						<div class="logo">
							<h1><a href="<?php echo base_url();?>"> <span style="color: black;">OFFERS</span> BULL <img class="responsive" style="padding-left:0px;padding-right: 0px;" src="<?php echo base_url()?>assets/images/bulllogo.png" width="100" height="50"></a></h1>
						</div>
					</div>
				</div>	
				<div class="col-xs-12 col-sm-12 col-lg-8 col-md 12">
						<div class="agileits_search">
						<form action="<?php echo base_url();?>Login/mainsearch" method="post">
							<input class="agileinfo_search-input" name="Search" type="text" placeholder="Get the best offers" required />
							<select class="agileinfo_search-select" name="category" required>
								<option value="">All Categories</option>
								<option value="realestate">Real Estates</option>
								<option value="tution">Tutions</option>
								<option value="hotel">Hotels & Restaurents </option>
								<option value="travelling">Travelling</option>
								<option value="automobile">Automobiles</option>
							</select>
							<button type="submit" class="btn btn-default" aria-label="Left Align">
								<i class="fa fa-search" aria-hidden="true"> </i>
							</button>
						</form>
					</div>
				</div>	
			<div class="clearfix"></div>
			</div>
		</div>
				
	</header>
	<!-- //header -->