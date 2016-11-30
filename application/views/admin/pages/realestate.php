<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>REALESTATE / ADD</h2>
            </div>
<!-- Notification Message -->
	<?php if($this->session->flashdata('message')!=null){?>
	<div class="alert alert-warning alert-dismissible" role="alert">
		 <?php echo $this->session->flashdata('message');?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
         </button>
	</div>
	<?php }?>
            <!-- CONTAINER ADD -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                    <div class="header">
                            <h2>
                                Add realestate data
                            </h2>
                        <div class="body">
                        	<form action="<?php echo base_url();?>Admin/realestate/create" id="frmFileUpload" method="post" enctype="multipart/form-data">
								<div class="row clearfix">
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">person</i> <span style="color: red;">*</span> 
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Vendors Name" name="name" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-8">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">title</i><span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Title" name="title" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                
	                                <div class="col-md-12">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">contacts</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <textarea class="form-control date" placeholder="address" name="address" required="required"></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">business</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <select required="required" name="type">
	                                            	<option value="Rent">Rent</option>
	                                            	<option value="Sell">Sell</option>
	                                            </select>
	                                        </div>    
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">crop_free</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Builtup area" name="builtup">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">monetization_on</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="price" name="price">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">insert_comment</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <textarea class="form-control date" placeholder="Description" name="description" required="required"></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">call</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Mobile" name="mobile" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-8">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">email</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="email" name="email" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">label</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <textarea class="form-control date" placeholder="amenities" name="amenities"></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">location_city</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="city" name="city" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">live_help</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="area" name="area" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                 <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">access_timer</i> Offer End date
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="date" class="form-control date" placeholder="Offer End date" name="date">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <hr>
                                <div class="dropzone"> 
	                                <div class="dz-message">
	                                    <div class="drag-icon-cph">
	                                        <i class="material-icons">touch_app</i>
	                                    </div>
	                                    <h3>Choose image<span style="color: red;">*</span> and submit post </h3>
	                                </div>
	                                <div class="fallback">
	                                   <input type="file" id="image" multiple="multiple" name="image[]" required="required">
	                                </div>
                                </div>
	                                <input type="submit" class="btn btn-block btn-lg btn-success waves-effect" value="SUBMIT">
                            </form>
                    </div>
                        </div> <!-- #END# CARD -->
                    </div>
                </div>
            </div>
            </div>
            <!-- #END# CONTAINER ADD -->
    </section>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets_admin/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets_admin/js/demo.js"></script>
   