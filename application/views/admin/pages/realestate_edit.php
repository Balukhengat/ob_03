<?php 
	$userid = $_SESSION['adminid'];
	$query = "SELECT * from realestate WHERE realid='$realid' and userid='$userid'";
	$realedit=$this->db->query($query);
	if($this->db->affected_rows()==0){
		$this->session->set_flashdata('message','Record not found !');
		$data['pagename']="realestate_view.php";
		$this->load->view('pages/profile/profile',$data);
	}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>REALESTATE / EDIT / ID : <?php echo $realid;?></h2>
            </div>
            <!-- CONTAINER ADD -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Realestate</h2>
                        </div>
                        <div class="body">
                        <?php foreach ($realedit->result_array() as $row){?>	
                        	<form action="<?php echo base_url();?>Admin/realestate/update/<?php echo $row['realid'];?>" id="frmFileUpload" method="post" enctype="multipart/form-data">
								<div class="row clearfix">
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">person</i> <span style="color: red;">*</span> 
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Vendors Name" name="name" value="<?php echo $row['name'];?>" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-8">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">title</i><span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Title" name="title" value="<?php echo $row['title'];?>" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                
	                                <div class="col-md-12">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">contacts</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <textarea class="form-control date" placeholder="address" name="address" required="required"><?php echo $row['address'];?></textarea>
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
	                                            	<option <?php if($row['type']=="Rent"){ echo 'selected';}?> value="Rent">Rent</option>
	                                            	<option <?php if($row['type']=="Sell"){ echo 'selected';}?> value="Sell">Sell</option>
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
	                                            <input type="text" class="form-control date" placeholder="Builtup area" name="builtup" value="<?php echo $row['builtup'];?>">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">monetization_on</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="price" name="price" value="<?php echo $row['price'];?>">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">insert_comment</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <textarea class="form-control date" placeholder="Description" name="description" required="required"><?php echo $row['description'];?></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">call</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Mobile" name="mobile" value="<?php echo $row['mobile'];?>" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-8">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">email</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="email" name="email" value="<?php echo $row['email'];?>" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">label</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <textarea class="form-control date" placeholder="amenities" name="amenities"><?php echo $row['amenities'];?></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">location_city</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="city" name="city" value="<?php echo $row['city'];?>" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">live_help</i> <span style="color: red;">*</span>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="area" name="area" value="<?php echo $row['area'];?>" required="required">
	                                        </div>
	                                    </div>
	                                </div>
	                                 <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">access_timer</i> Offer End date
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="date" class="form-control date" placeholder="Offer End date" value="<?php echo $row['offerend'];?>" name="date">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <hr>
	                                <input type="submit" class="btn btn-block btn-lg btn-success waves-effect" value="UPDATE">
                            </form>
                            <?php }?>
                    </div>
                        </div> <!-- #END# CARD -->
                    </div>
                </div>
                <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit / Delete images</h2>
                        </div>
                        	 <?php 
			                    $query = "SELECT realestate.realid, realestate.`name`, realestate.title, realestate.type, realestate.address, realestate.builtup, realestate.price, realestate.description, realestate.mobile, realestate.email, realestate.amenities, realestate.city, realestate.area, realestate.date, realestate.offerend, realestate.category, realestate.userid, real_img.realid, real_img.path, real_img.id FROM realestate INNER JOIN real_img ON realestate.realid = real_img.realid WHERE realestate.realid = $realid";
			                    $realeditimg=$this->db->query($query);
			                    foreach ($realeditimg->result_array() as $row_img){
			                    ?>	
			                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
			                    	<hr>
									<img alt="<?php echo $row['title'];?>" src="<?php echo base_url();echo $row_img['path'];?>" width="200" height="200">
					                <form action="<?php echo base_url();?>Admin/UpdateImage/real" method="post" enctype="multipart/form-data">
					                	<input type="hidden" name="imgid" value="<?php echo $row_img["id"];?>">
					                	<input type="hidden" name="postid" value="<?php echo $row_img["realid"];?>">
					                	<input type="file" name="image" required="required">
					                	<input type="submit" class="btn btn-success" value="Change Image">
					                </form>
					                <br>
					                <a href="<?php echo base_url();?>Admin/DeleteImage/real/<?php echo $row_img["id"];?>/<?php echo $row_img["realid"];?>"><input type="submit" class="btn btn-danger" value="Delete Image  &nbsp;"></a>
					                <hr>
				                </div>
				                <?php }?>
                	</div> 
                </div>       
           	</div> 
           	<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	 <div class="card">
                        <div class="header">
                            <h2>Add more images to this post</h2>
                        </div>
                     </div>   
                     <!-- Add more imgaes -->
                     <div class="body">
                            <form action="<?php echo base_url();?>Admin/AddMoreImages" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="realid" value="<?php echo $realid;?>">
                                <input type="hidden" name="category" value="real">
                                <div class="dropzone"> 
	                                <div class="dz-message">
	                                    <div class="drag-icon-cph">
	                                        <i class="material-icons">touch_app</i>
	                                    </div>
	                                    <h3>Choose image<span style="color: red;">*</span> and submit post </h3>
	                                    <em>To choose multiple images press and hold CTRL key.</em>
	                                </div>
	                                <div class="fallback">
	                                   <input type="file" id="image" multiple="multiple" name="image[]" required="required">
	                                </div>
	                                <br>
	                                <input type="submit" value="Upload" class="btn btn-success" />
                                </div>
                                
                            </form>
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