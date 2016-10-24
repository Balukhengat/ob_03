<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
<form method="post" action="<?php echo base_url();?>Basic_Controller/user_realestate" enctype="multipart/form-data">
	<div class="form-group">
	  <label for="id">Offers Bull User ID:</label>
	  <input type="text" class="form-control" id="id" disabled>
	</div>
	<div class="form-group">
	  <label for="username">Name:</label>
	  <input type="text" class="form-control" id="username" disabled>
	</div>
	<div class="form-group">
	  <label for="emailid">Email ID:</label>
	  <input type="email" class="form-control" id="emailid" disabled>
	</div>
	<div class="form-group">
	  <label for="mobile">Mobile No:</label>
	  <input type="text" class="form-control" id="emailid">
	</div>
	 <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo 'image'; ?></label>
                        <div class="col-sm-5">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                    <img src="http://placehold.it/200x150" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input required="" type="file" name="image" accept="image/*">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
	<button type="submit" class="btn btn-success">Update profile</button>
</form>
</div>