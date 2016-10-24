	<!-- sign in form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Sign In</h3>
				<form action="<?php echo base_url();?>login" method="post">
					<input type="email" name="email" placeholder="Your Email" required=""> 
					<input type="password" name="password" placeholder="Password" required="">
						<?php if($this->session->flashdata('message')!=null){?>
						<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
						<?php }?>
					<input type="submit" value="Sign In">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
						<div class="forgot">
							<a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3 class="w3ls-password">Get Password</h3>		
										<p class="get-pw">Enter your email address below and we'll send you an email with instructions.</p>\
										
									</div>
								</div>
							</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
				<h6> Not a Member Yet? <a href="<?php echo base_url()?>register">Sign Up Now</a> </h6>
			</div>
		</div>
	</section>
	
	<!-- //sign in form -->
