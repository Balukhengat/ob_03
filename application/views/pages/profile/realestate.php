<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
<form method="post" action="<?php echo base_url();?>Basic_Controller/user_realestate" enctype="multipart/form-data">
	<div class="form-group">
	  <label for="Name">Name:</label>
	  <input type="text" class="form-control" id="name" name="name">
	</div>
	<div class="form-group">
	  <label for="id">Title:</label>
	  <input type="text" class="form-control" id="title" title="title">
	</div>
	<div class="form-group">
	  <label for="Type">Type:</label>
	  <select class="form-control">
	  	<option>Sell</option>
	  	<option>Rent</option>
	  </select>
	</div>
	<div class="form-group">
	  <label for="Address">Address:</label>
	  <textarea class="form-control" id="address" name="address"></textarea>
	</div>
	<div class="form-group">
	  <label for="builtup">Builtup:</label>
	  <input type="text" class="form-control" id="builtup" name="builtup">
	</div>
	<div class="form-group">
	  <label for="price">Price:</label>
	  <input type="text" class="form-control" id="price" name="price">
	</div>
	<div class="form-group">
	  <label for="Description">Description:</label>
	  <textarea class="form-control" id="description" name="description"></textarea>
	</div>
	<div class="form-group">
	  <label for="Mobile">Mobile:</label>
	  <input type="text" class="form-control" id="mobile" name="mobile">
	</div>
	<div class="form-group">
	  <label for="email">Email:</label>
	  <input type="text" class="form-control" id="email" name="email">
	</div>
	<div class="form-group">
	  <label for="Facilities">Facilities</label>
	  <input type="text" class="form-control" id="facilities" name="facilities">
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
	  <label for="Offerend">Offerend:</label>
	  <input type="text" class="form-control" id="offerend" name="offerend">
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>