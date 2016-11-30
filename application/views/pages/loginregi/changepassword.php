 <?php if(isset($_SESSION['email'])){?>
 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<?php $result=$this->db->get_where('register',array('email'=>$email))->result_array();
			foreach ($result as $query){
			?>
			<h3>Change Password</h3>
				<form action="<?php echo  base_url();?>login/changepassword/<?php echo $query['reg_id'];?>" method="post">
					<input type="password" name="password" placeholder="New Password" required="">
					<input type="password" name="confirmpassword" placeholder="Confirm Password" required="">
					<input type="submit" value="Submit">
				</form><?php }?>
			</div>
		</div>
	</section><?php }else{ redirect(base_url().'Login/login');
	$this->session->set_flashdata('message','Login here!!!');
	}?>