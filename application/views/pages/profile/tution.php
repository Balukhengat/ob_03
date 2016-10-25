<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
<?php $this->db->get_where('e');?>
<form method="post" action="<?php echo base_url();?>Basic_Controller/user_tution" enctype="multipart/form-data">
	<div class="form-group">
	  <label for="Name">Name:</label>
	  <input type="text" class="form-control" id="name" name="name" disabled>
	</div>
	<div class="form-group">
	  <label for="id">Title:</label>
	  <input type="text" class="form-control" id="title" title="title">
	</div>
	<div class="form-group">
	  <label for="Address">Address:</label>
	  <textarea class="form-control" id="address" name="address"></textarea>
	</div>
	<div class="form-group">
	  <label for="Description">Description:</label>
	  <textarea class="form-control" id="description" name="description"></textarea>
	</div>
	<div class="form-group">
	  <label for="Mobile">Mobile:</label>
	  <input type="text" class="form-control" id="mobile" name="mobile" disabled>
	</div>
	<div class="form-group">
	  <label for="email">Email:</label>
	  <input type="text" class="form-control" id="email" name="email" disabled>
	</div>
	<div class="form-group">
	  <label for="City">City:</label>
	  <input type="text" class="form-control" id="city" name="city">
	</div>
	<div class="form-group">
	  <label for="Area">Area:</label>
	  <input type="text" class="form-control" id="area" name="area">
	</div>
	<div class="form-group">
	  <label for="Offerend">Offer end date:</label>
	  <input type="text" class="form-control" id="offerend" name="offerend">
	</div>
	<div class="form-group">
	  <label for="Image">Image:</label>
	  <input type="file" class="form-control" id="image" name="image[]">
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>