<!-- sign up form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Sign Up</h3>
			<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
				<form action="<?php echo  base_url();?>index.php/login/registration" method="post">
					<input type="text" name="username" placeholder="Username" required=""> 
					<input type="text" name="mobile" placeholder="Mobile" required="" maxlength="10">
					<input type="email" name="email" placeholder="Your Email" required=""> 
					<input type="password" name="password" placeholder="Password" required=""> 
					<input type="password" name="cpassword" placeholder="Confirm Password" required=""> 
					<div class="signin-rit">
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="terms.html" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="privacy.html" target="_blank">Privacy Policy</a></label>
						</span>
					</div>
					
					<input type="submit" value="Sign Up">
				</form>
			</div>
		</div>
	</section>
	<!-- //sign up form -->