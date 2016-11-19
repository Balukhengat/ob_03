<html>
<?php 	
	$real_info=$this->db->get_where('realestate',array('realid'=>$realid))->result_array();
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
			<a href="<?php echo base_url();?>Realestate/real">realestate</a> / 
			<span>ID - <?php echo $realid;?></span></span>
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
					<p> <i class="glyphicon glyphicon-map-marker"></i>Posted on | <?php echo $date = $row['date'];?> | Post id : <?php echo $row['realid']; ?></p>
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
			<h4><span class="w3layouts-agileinfo">Facilities </span> : <?php echo $row['amenities'];?> </h4>
			<hr>
			<h4><span class="w3layouts-agileinfo">Description</span> :<?php echo $row['description'];?></h4>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="col-md-5 product-details-grid">
		<div class="item-price">
			<div class="product-price">
				<p class="p-price">Price</p>
				<h3 class="">RS. <?php echo number_format($row['price'],2)?>/-</h3>
				<div class="clearfix"></div>
			</div>
			<div class="condition">
				<p class="p-price">BuiltUp Area</p>
				<h4><?php echo $row['builtup']?> sq.ft</h4>
				<div class="clearfix"></div>
			</div>
			<div class="itemtype">
				<p class="p-price">House Type</p>
				<h4><?php echo $row['type']?></h4>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="interested text-center">
			<h4>Contact details</h4>
			<hr>	
			<p style="text-align: left;"><i class="glyphicon glyphicon-earphone"></i><?php echo $row['mobile'];?><br><br>
			<i class="glyphicon glyphicon-earphone"></i><?php echo $row['email'];?></p>
		</div>
		<div class="tips">
		<h4>Photos</h4>
				<img src="<?php echo base_url()?>/assets/images/account-bg.jpg" width="500" height="400" class="img-responsive">
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