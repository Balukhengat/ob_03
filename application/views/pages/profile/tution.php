<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
<?php 
$userid = $_SESSION['userid'];
$tution_info=$this->db->get_where('register',array('reg_id'=>$userid))->result_array();
foreach ($tution_info as $row){
?>
<form method="post" action="<?php echo base_url();?>Basic_Controller/user_tution/create" enctype="multipart/form-data">
	<div class="form-group">
	<?php if($this->session->flashdata('message')!=null){?>
	<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
	<?php }?>
	  <label for="Name">Name:</label>
	  <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['username']?>"  readonly>
	</div>
	<div class="form-group">
	  <label for="id">Title:</label>
	   <div class="error"><?php echo form_error('title'); ?></div>
	  <input type="text" class="form-control" id="title" name="title">
	</div>
	<div class="form-group">
	  <label for="Address">Address:</label>
	   <div class="error"><?php echo form_error('address'); ?></div>
	  <textarea class="form-control" id="address" name="address"></textarea>
	</div>
	<div class="form-group">
	  <label for="Description">Description:</label>
	   <div class="error"><?php echo form_error('description'); ?></div>
	  <textarea class="form-control" id="description" name="description"></textarea>
	</div>
	<div class="form-group">
	  <label for="Mobile">Mobile:</label>
	  <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']?>" readonly>
	</div>
	<div class="form-group">
	  <label for="email">Email:</label>
	  <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']?>"  readonly>
	</div>
	<div class="form-group">
	  <label for="City">City:</label>
	   <div class="error"><?php echo form_error('city'); ?></div>
	  <input type="text" class="form-control" id="city" name="city">
	</div>
	<div class="form-group">
	  <label for="Area">Area:</label>
	   <div class="error"><?php echo form_error('area'); ?></div>
	  <input type="text" class="form-control" id="area" name="area">
	</div>
	<div class="form-group">
	  <label for="Offerend">Offer end date:</label>
	   <div class="error"><?php echo form_error('offerend'); ?></div>
	<input type="date" class="form-control" id="offerend" name="offerend">
	</div>
	<div class="form-group">
	  <label for="Image">Image:</label>
	  <input type="file" class="form-control" id="image" name="image[]">
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
	<?php }?>
</form>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>