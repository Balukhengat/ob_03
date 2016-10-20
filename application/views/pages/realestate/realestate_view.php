<html>
<?php 	$real_info=$this->db->get_where('realestate',array('realid'=>$realid))->result_array();
	
		$this->load->view('layout/head');
	?>
	<body>
	
		<?php $this->load->view('layout/header');?>
			<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="<?php echo base_url();?>"><i class="fa fa-home home_1"></i></a> / 
			<a href="all-classifieds.html">All Ads</a> / 
			<a href="">realestate</a> / 
			<span>house</span></span>
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
					<p> <i class="glyphicon glyphicon-map-marker"></i>Post on</a>| <?php echo $row['date'];?>, Application id:OB-00<?php echo $row['realid']; ?></p>
					<div class="rslides">
			<ul class="rslides" id="slider">
				<li>
					<div class="w3ls-slide-text">
					<img class="img-responsive" src="<?php echo base_url();?>assets/images/r7.jpg">
					</div>
				</li>
				<li>
					<div class="w3ls-slide-text">
						<img class="img-responsive" src="<?php echo base_url();?>assets/images/r6.jpg">
					</div>
				</li>
				<li>
					<div class="w3ls-slide-text">
						<img class="img-responsive" src="<?php echo base_url();?>assets/images/r5.jpg">
					</div>
				</li>
				<li>
					<div class="w3ls-slide-text">
						<img class="img-responsive" src="<?php echo base_url();?>assets/images/r4.jpg">
					</div>
				</li>
				<li>
					<div class="w3ls-slide-text">
						<img class="img-responsive" src="<?php echo base_url();?>assets/images/r7.jpg">
						
					</div>
				</li>
			</ul>
		</div>
					
					<!-- FlexSlider -->
					  <script defer src="<?php base_url();?>assets/js/jquery.flexslider.js"></script>

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						<h4><span class="w3layouts-agileinfo">Owner Name </span> : <a href="#"><?php echo $row['name'];?></a><div class="clearfix"></div></h4>
						<h4><span class="w3layouts-agileinfo">Address </span> : <?php echo $row['address'];?></h4>
						<h4><span class="w3layouts-agileinfo">Location </span> : <?php echo $row['area'];?></h4>
						<h4><span class="w3layouts-agileinfo">City </span> : <?php echo $row['city'];?></h4>
						<h4><span class="w3layouts-agileinfo">Facilities </span> : <?php echo $row['amenities'];?> </h4>
						<h4><span class="w3layouts-agileinfo">Description</span> :<p><?php echo $row['description'];?></p><div class="clearfix"></div></h4>
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Price</p>
							<h3 class="rate">RS. <?php echo $row['price'];?>/-</h3>
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
						<h4>Safety Tips for Buyers</h4>
							<ol>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
							</ol>
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