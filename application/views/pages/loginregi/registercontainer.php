<!-- sign up form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Sign Up</h3>
				<form action="<?php echo  base_url();?>index.php/login/registration" method="post">
					<?php if($this->session->flashdata('message')!=null){?>
						<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
						<?php }?>
					<div class="error"><?php echo form_error('username'); ?></div>
					<input type="text" name="username" placeholder="Username" required=""> 
					<div class="error"><?php echo form_error('mobile'); ?></div>
					<input type="text" name="mobile" placeholder="Mobile" required="" maxlength="10">
					<div class="error"><?php echo form_error('email'); ?></div>
					<input type="email" name="email" placeholder="Your Email" required=""> 
					<div class="error"><?php echo form_error('password'); ?></div>
					<input type="password" name="password" placeholder="Password" required=""> 
					<div class="error"><?php echo form_error('cpassword'); ?></div>
					<input type="password" name="cpassword" placeholder="Confirm Password" required="">
					<div class="signin-rit">
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" name="checkbox" required="">I agree to your <a class="w3layouts-t" href="<?php echo base_url();?>index.php/Help/terms" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="<?php echo base_url();?>index.php/Help/privacy" target="_blank">Privacy Policy</a></label>
						</span>
					</div>
					<input type="submit" value="Sign Up">
				</form>
			</div>
		</div>
	</section>
	<!-- //sign up form -->