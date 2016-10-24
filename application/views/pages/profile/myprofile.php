<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
<?php 
	$userid = $_SESSION['userid'];
	$profile_info = $this->db->get_where('register',array('reg_id'=>$userid))->result_array();
	foreach ($profile_info as $row){
?>	
<form method="post" action="<?php echo base_url();?>Basic_Controller/updateprofile">
	<div class="form-group">
	<?php if($this->session->flashdata('message')!=null){?>
				<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
	<?php }?>
	  <label for="id">Offers Bull User ID:</label>
	  <input type="text" class="form-control" id="id" value="<?php echo $row['reg_id']?>" disabled>
	</div>
	<div class="form-group">
	  <label for="username">Name:</label>
	  <input type="text" class="form-control" id="username" value="<?php echo $row['username']?>" disabled>
	</div>
	<div class="form-group">
	  <label for="emailid">Email ID:</label>
	  <input type="email" class="form-control" id="emailid" value="<?php echo $row['email']?>" disabled>
	</div>
	<div class="form-group">
	  <label for="mobile">Mobile No:</label>
	  <div class="error"><?php echo form_error('mobile'); ?></div>
	  <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $row['mobile']?>">
	</div>
	<div class="form-group">
	  <label for="address">Address:</label>
	  <div class="error"><?php echo form_error('address'); ?></div>
	  <textarea class="form-control" name="address" id="address"><?php echo $row['address']?></textarea>
	</div>
	<div class="form-group">
	  <label for="city">City:</label>
	  <div class="error"><?php echo form_error('city'); ?></div>
	  <input type="text" class="form-control" name="city" id="city" value="<?php echo $row['city']?>">
	</div>
	<button type="submit" class="btn btn-success">Update profile</button>
</form>
<?php
}
?>
</div>