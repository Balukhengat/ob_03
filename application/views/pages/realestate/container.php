	<?php
	$query=array();
//pagination per page 5 and segment
	if($datas==null && $msearch==null){
		$query= $this->db->get('realestate',5,$this->uri->segment(3))->result();
	}
	//print_r($msearch);die();
	?>
	<?php $this->load->view('layout/category.php');?>
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
				<a href="<?php echo base_url();?>"><i class="fa fa-home home_1"></i></a> / 
				<a href="<?php echo base_url();?>index.php/Realestate/real"><span>Real Estate</span></a>
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Real estates -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
																					<!-- @ SEARCH -->
			<form method="post" id=real_search name="search" action="<?php echo base_url();?>index.php/Realestate/search">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city</label><span style="color: red;">*</span> 
						<input type="text" id="city" name="city" />	
			            <div><span class="error" id="city_error"></span></div>
				</div>
				<div class="browse-category ads-list">
					<label>Rent / Purchase</label><span style="color: red;">*</span>
					<select id="type" name="type">
					  <option value="">Select</option>
					  <option>Rent</option>
					  <option>Sell</option>
					  <option>Any</option>
					</select>
					<div><span class="error" id="type_error"></span></div> 
				</div>
				<div class="select-city-for-local-ads ads-list">
					<label>Select Price</label><span style="color: red;">*</span>
					<select id="price" name="price">
					  <option value="">Select</option>
					  <option value="0">0 to 10,000</option>
					  <option value="1">10,000 to 50,000</option>
					  <option value="2">50,000 to 1 lakh</option>
					  <option value="3">1 lakh to 50 lakh</option>
					  <option value="4">50 lakh and above</option>
					</select>
					<div> <span class="error" id="price_error"></span></div>	
				</div>
				<div class="search-product ads-list">
					<label>&nbsp;</label>
					<button name="submit" class="btn btn-block btn-danger">Search</button>
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
			<div class="ads-grid">
				
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								
<!-- 								<div class="sort"> -->
<!-- 								   <div class="sort-by"> -->
<!-- 										<label>Sort By : </label> -->
<!-- 										<select> -->
<!-- 														<option value="">Most recent</option> -->
<!-- 														<option value="">Price: Rs Low to High</option> -->
<!-- 														<option value="">Price: Rs High to Low</option> -->
<!-- 										</select> -->
<!-- 									   </div> -->
<!-- 									 </div> -->
								<div class="clearfix"></div>
							<ul class="list">
							<?php  if($datas==null && $msearch==null){
								foreach ($query as $row)
								{
							?>
								<a href="<?php echo base_url();?>index.php/realestate/manage_view/<?php echo $row->realid;?>">
								<?php 
									$realid = $row->realid;
									$query2 = "SELECT real_img.path FROM real_img WHERE real_img.realid = $realid LIMIT 1";
									$result2 = $this->db->query($query2);
									$row3 = $result2->row();
									$img_path =  $row3->path;
								?>
									<li>
									<img src="<?php echo base_url();?><?php echo $img_path;?>" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row->title?></h5>
									<span class="adprice">RS. <?php echo $row->price?>/-</span>
									<p class="catpath">Real Estate : <?php echo $row->type?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php $date =  strtotime($row->date); echo $date = date('F d, Y',$date);?></span>
									<span class="cityname"><?php echo $row->city?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php } } elseif ($msearch==null) { 
									foreach ($datas as $row1)
								{?>
								<a href="<?php echo base_url();?>index.php/realestate/manage_view/<?php echo $row1->realid;?>">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row1->title?></h5>
									<span class="adprice">RS. <?php echo $row1->price?>/-</span>
									<p class="catpath">Real Estate : <?php echo $row1->type?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php echo $row1->date?></span>
									<span class="cityname"><?php echo $row1->city?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php }}else{
									foreach ($msearch as $row2){
								?> 
									<a href="<?php echo base_url();?>index.php/realestate/manage_view/<?php echo $row2['realid'];?>">
											<li>
											<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
											<section class="list-left">
											<h5 class="title"><?php echo $row2['title'];?></h5>
											<span class="adprice">RS. <?php echo $row2['price']?>/-</span>
											<p class="catpath">Real Estate : <?php echo $row2['type']?></p>
											</section>
											<section class="list-right">
											<span class="date"><?php echo $row2['date']?></span>
											<span class="cityname"><?php echo $row2['city']?></span>
											</section>
											<div class="clearfix"></div>
											</li> 
									</a>
								
								<?php }}?>
							</ul>
						</div>
						</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						 <div>
												<div id="container">
								
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
						</div>
							</div>
						</div>
						<div class="pagination pagination-sm ">
							<?php if($datas==null && $msearch==null){ echo $this->pagination->create_links();}?>
							<?php  if($query==null){ echo $this->pagination->create_links();}?>
						</div>
					  </div>
					</div>
				</div>
				</div>
				
				
				<div class="side-bar col-md-3">
				<div class="w3ls-featured-ads">	
					<!-- adsense -->
				</div>
				</div>
			</div>
		</div>	
	</div>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>
	<!-- // Real estates -->