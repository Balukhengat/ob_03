<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one--> 
			
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url();?>index.php/Login" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url();?>index.php/Register" aria-expanded="false"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
					</li>
					
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
						<a href="<?php echo base_url();?>index.php/help"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div> 
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="<?php echo base_url();?>"> Offers Bull <img src="<?php echo base_url()?>assets/images/bulllogo.png" width="100" height="50"></a></h1>
				</div>
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="text" placeholder="Get the best offers" required="" />
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				<a class="post-w3layouts-ad" href="#">Post Free Ad</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->