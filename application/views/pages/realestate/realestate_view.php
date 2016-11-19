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
<!-- SLIEDER -->
		<div id="slides">
			<img src="<?php echo base_url()?>/assets/images/account-bg.jpg" width="500" height="400" class="img-responsive">
			<img src="<?php echo base_url()?>/assets/images/r10.jpg" width="500" height="400" class="img-responsive">
			<a href="#" class="slidesjs-previous slidesjs-navigation"><img src="<?php echo base_url();?>assets/images/slider-arrow-left.png"></a>
      		<a href="#" class="slidesjs-next slidesjs-navigation"><img src="<?php echo base_url();?>assets/images/slider-arrow-right.png"></a>
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
<style>
    #slides {
      display: none
    }

    .container {
      margin: 0 auto
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }
      .container {
        width: auto
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: auto
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
        width: 724px
      }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
      .container {
        width: 1170px
      }
    }
  </style>
  <script src="<?php echo base_url();?>assets/js/jquery.slides.min.js"></script>
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: false
      });
    });
  </script>
  <style>
    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:3px;
    }

    #slides .slidesjs-previous {
      margin-right: 5px;
      float: left;
    }

    #slides .slidesjs-next {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-pagination {
      margin: 6px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>
  
  <!-- ZOOOMING OF IMAGE ON HOVER-->
  <script src='<?php echo base_url();?>assets/js/jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
			$('#ex1').zoom();
			$('#ex2').zoom({ on:'grab' });
			$('#ex3').zoom({ on:'click' });			 
			$('#ex4').zoom({ on:'toggle' });
		});
	</script>
<!-- 	<span class='zoom' id='ex1'> -->
<!-- 					<img src="" width="500" height="400" class="img-responsive"> -->
<!-- 	</span>	 -->