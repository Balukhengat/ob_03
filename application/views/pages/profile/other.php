<div class="col-md-9">
<?php 
$userid = $_SESSION['userid'];
$other_info=$this->db->get_where('register',array('reg_id'=>$userid))->result_array();
foreach ($other_info as $row){
?>
<div class="col-md-9">
	<a href="<?php echo base_url();?>Basic_Controller/user_other"><button class="btn btn-success">Add</button></a>
	<a href="<?php echo base_url();?>Basic_Controller/user_other_view"><button class="btn btn-success">View</button></a>
</div>
<form method="post" action="<?php echo base_url();?>Basic_Controller/user_other/create" enctype="multipart/form-data">
	<?php if($this->session->flashdata('message')!=null){?>
	<div class="col-md-9">
	<br>
		<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
	</div>
	<?php }?>
	<br>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Name">Name</label><span style="color: red;">*</span>
	  <div class="error"><?php echo form_error('name'); ?></div>
	  <input type="text" class="form-control" id="name" name="name"  value="<?php echo $row['username']?>" readonly>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="id">Title</label><span style="color: red;">*</span>
	  <div class="error"><?php echo form_error('title'); ?></div>
	  <input type="text" class="form-control" id="title" name="title">
	  <span class="error" id="title_error"></span>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Address">Address</label><span style="color: red;">*</span>
	  <div class="error"><?php echo form_error('address'); ?></div>
	  <textarea class="form-control" id="address" name="address"></textarea>
	  <span class="error" id="address_error"></span>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Description">Description</label><span style="color: red;">*</span>
	  <div class="error"><?php echo form_error('description'); ?></div>
	  <textarea class="form-control" id="description" name="description"></textarea>
	  <span class="error" id="description_error"></span>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Mobile">Mobile</label>
	  <div class="error"><?php echo form_error('mobile'); ?></div>
	  <input type="text" class="form-control" id="mobile" name="mobile"  value="<?php echo $row['mobile']?>" readonly>
	  <span class="error" id="mobile_error"></span>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="email">Email</label>
	  <div class="error"><?php echo form_error('email'); ?></div>
	  <input type="text" class="form-control" id="email" name="email"  value="<?php echo $row['email']?>" readonly>
	  <span class="error" id="email_error"></span>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="City">City</label><span style="color: red;">*</span>
	  <div class="error"><?php echo form_error('city'); ?></div>
	  <input type="text" class="form-control" id="city" name="city">
	  <span class="error" id="city_error"></span>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Area">Area</label><span style="color: red;">*</span>
	  <div class="error"><?php echo form_error('area'); ?></div>
	  <input type="text" class="form-control" id="area" name="area">
	  <span class="error" id="area_error"></span>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Offerend">Offer end date</label>
	  <div class="error"><?php echo form_error('offerend'); ?></div>
	  <input type="date" class="form-control" id="offerend" name="offerend">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	  <label for="Image">Image</label>
	  <input type="file" class="form-control" id="image" multiple="multiple" name="image[]">
	</div>
	</div>
	<div class="col-md-9">
	<button type="submit" class="btn btn-success">Submit</button>
	</div>
	<?php }?>
</form>
</div>
<div class="col-md-3">
	<h3>ADSENSE CODE GOES HERE</h3>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>