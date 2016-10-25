<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
<form method="post" action="<?php echo base_url();?>Basic_Controller/user_realestate" enctype="multipart/form-data">
	<div class="form-group">
	<?php if($this->session->flashdata('message')!=null){?>
	<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
	<?php }?>
	  <label for="Name">Name:</label>
	  <div class="error"><?php echo form_error('name'); ?></div>
	  <input type="text" class="form-control" id="name" name="name">
	</div>
	<div class="form-group">
	  <label for="id">Title:</label>
	  <div class="error"><?php echo form_error('title'); ?></div>
	  <input type="text" class="form-control" id="title" name="title">
	</div>
	<div class="form-group">
	  <label for="Type">Type:</label>
	  <div class="error"><?php echo form_error('type'); ?></div>
	  <select name="type" class="form-control">
	  	<option>Sell</option>
	  	<option>Rent</option>
	  </select>
	</div>
	<div class="form-group">
	  <label for="Address">Address:</label>
	  <div class="error"><?php echo form_error('address'); ?></div>
	  <textarea class="form-control" id="address" name="address"></textarea>
	</div>
	<div class="form-group">
	  <label for="builtup">Builtup:</label>
	  <div class="error"><?php echo form_error('builtup'); ?></div>
	  <input type="text" class="form-control" id="builtup" name="builtup">
	</div>
	<div class="form-group">
	  <label for="price">Price:</label>
	  <div class="error"><?php echo form_error('price'); ?></div>
	  <input type="text" class="form-control" id="price" name="price">
	</div>
	<div class="form-group">
	  <label for="Description">Description:</label>
	  <div class="error"><?php echo form_error('description'); ?></div>
	  <textarea class="form-control" id="description" name="description"></textarea>
	</div>
	<div class="form-group">
	  <label for="Mobile">Mobile:</label>
	  <div class="error"><?php echo form_error('mobile'); ?></div>
	  <input type="text" class="form-control" id="mobile" name="mobile" >
	</div>
	<div class="form-group">
	  <label for="email">Email:</label>
	  <div class="error"><?php echo form_error('email'); ?></div>
	  <input type="text" class="form-control" id="email" name="email" >
	</div>
	<div class="form-group">
	  <label for="Facilities">Facilities</label>
	  <div class="error"><?php echo form_error('facilities'); ?></div>
	  <input type="text" class="form-control" id="facilities" name="facilities">
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
	  <input type="file" class="form-control" id="image" multiple="multiple" name="image[]">
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>