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
                            <h2>EDIT REALESTATE</h2>
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
	                                            <select required="required" value="<?php echo $row['type'];?>">
	                                            	<option>Rent</option>
	                                            	<option>Sell</option>
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
            </div>
            <!-- #END# CONTAINER ADD -->
    </section>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
	</script>
    <script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
	</script>
