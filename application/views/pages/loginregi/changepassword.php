 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<?php $query=$this->db->get_where('register',array('email'=>$email));?>
			<h3>Change Password</h3>
				<form action="<?php echo  base_url();?>login/changepassword/<?php echo $query['reg_id'];?>" method="post">
					<input type="text" name="password" placeholder="New Password" required="">
					<input type="text" name="confirmpassword" placeholder="Confirm Password" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</section>