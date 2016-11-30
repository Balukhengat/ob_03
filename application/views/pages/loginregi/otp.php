	<?php if(isset($_SESSION['email'])){?>
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Verify your OTP</h3>
				<form action="<?php echo  base_url();?>login/verifyotp" method="post">
					<input type="text" name="otp" placeholder="Enter OTP" required="">
					<input type="hidden" name="email" value="<?php echo $email;?>"> 
					<?php if($this->session->flashdata('message')!=null){?>
						<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
						<?php }?>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</section><?php }else{ redirect(base_url().'Login/login');
	$this->session->set_flashdata('message','Login here!!!');
	}?>
