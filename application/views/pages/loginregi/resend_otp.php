<!-- forgot form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div id="signin" class="agileinfo_signin">
			<h3>Enter email id again</h3>
				<form action="<?php echo base_url();?>index.php/login/forgot" method="post">
					<input type="email" name="email" placeholder="Your Email" required=""> 
						<?php if($this->session->flashdata('message')!=null){?>
						<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
						<?php }?>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</section>
	
	<!-- //Forgot form -->