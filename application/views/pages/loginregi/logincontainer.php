	<!-- sign in form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div id="signin" class="agileinfo_signin">
			<h3>Sign In</h3>
				<form action="<?php echo base_url();?>login/sigin" method="post">
					<input type="email" name="email" placeholder="Your Email" required=""> 
					<input type="password" name="password" placeholder="Password" required="">
						<?php if($this->session->flashdata('message')!=null){?>
						<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
						<?php }?>
					<input type="submit" value="Sign In">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
						<div class="forgot">
							<a href="<?php echo base_url();?>login/forgotpassword" >Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
				<h6> Not a Member Yet? <a href="<?php echo base_url()?>Login/newuser">Sign Up Now</a> </h6>
			</div>
		</div>
	</section>
	
	<!-- //sign in form -->
