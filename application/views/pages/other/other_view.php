<?php
	$real_info=$this->db->get_where('other',array('otherid'=>$otherid))->result_array();
	$this->load->view('layout/head');
	?>
	<body>
	<?php $this->load->view('layout/leftsidebar.php');?>
	<?php $this->load->view('layout/header');?>
	<?php $this->load->view('layout/category.php');?>
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="<?php echo base_url();?>"><i class="fa fa-home home_1"></i></a> / 
			<a href="<?php echo base_url();?>Other/others">Other</a> / 
			<span>ID - <?php echo $otherid;?></span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!--single-page-->
	<div class="single-page main-grid-border">
	<?php foreach ($real_info as $row){?>
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?php echo $row['title'];?></h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i>Posted on | <?php echo $date = $row['date'];?> | Post id : <?php echo $row['otherid']; ?></p>
<!-- SLIEDER -->
		<div id="slides">
			<div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <?php 
                                 $real_path = "SELECT path FROM other_img WHERE otherid = $otherid";
                                 $real_path_result = $this->db->query($real_path)->result_array();
								foreach ($real_path_result as $image_path){	
								?>  
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?php echo base_url();?><?php echo $image_path['path'];?>" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="<?php echo base_url();?><?php echo $image_path['path'];?>">
                                    </a>
                                </div>
                                <?php }?>
                            </div>
            </div>
		</div>
<!-- EOF SLIEDER -->		
		<div class="product-details">
			<hr>
			<h4><span class="w3layouts-agileinfo">Posted By </span> : <a href="#"><?php echo $row['name'];?></a></h4>
			<hr>
			<h4><span class="w3layouts-agileinfo">Address </span> : <?php echo $row['address'];?></h4>
			<hr>
			<h4><span class="w3layouts-agileinfo">Location </span> : <?php echo $row['area'];?></h4>
			<hr>
			<h4><span class="w3layouts-agileinfo">City </span> : <?php echo $row['city'];?></h4>
			<hr>
			<h4><span class="w3layouts-agileinfo">Description</span> : <?php echo $row['description'];?></h4>
			<hr>
			<h4><span class="w3layouts-agileinfo">Offer End At</span> : <?php echo $row['offerend'];?></h4>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="col-md-5 product-details-grid">
		<div class="interested text-center">
			<h4>Contact details</h4>
			<hr>	
			<p style="text-align: left;"><i class="glyphicon glyphicon-earphone"></i><?php echo $row['mobile'];?><br><br>
			<i class="glyphicon glyphicon-earphone"></i><?php echo $row['email'];?></p>
		</div>
		<div class="tips">
		<h4>Advertisement</h4>
				Adsence goes here
		</div>
	</div>
			<div class="clearfix"></div>
</div>
		</div>
		<?php }?>
	</div>
	<!--//single-page-->
		<?php $this->load->view('layout/footer');?>
		<?php $this->load->view('layout/js');?>
	</body>
</html>
	<!-- Light Gallery Plugin Js -->
    <script src="<?php base_url();?>assets_admin/plugins/light-gallery/js/lightgallery-all.js"></script>
    <!-- Custom Js -->
    <script src="<?php base_url();?>assets_admin/js/pages/medias/image-gallery.js"></script>