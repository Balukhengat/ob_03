	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Verify your OTP</h3>
				<form action="<?php echo  base_url();?>index.php/login/verifyotp" method="post">
					<input type="text" name="otp" placeholder="Enter OTP" required="">
					<input type="hidden" name="email" value="<?php echo $email?>"> 
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</section>
