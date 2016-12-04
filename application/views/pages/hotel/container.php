	<?php
	$query=array();
//pagination per page 5 and segment
	if($datas==null && $msearch==null){
		$query= $this->db->get('hotel',5,$this->uri->segment(3))->result();
	}
	
	?>
	<?php $this->load->view('layout/category.php');?>
	<!-- breadcrumbs -->
	
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
				<a href="<?php echo base_url();?>index.php"><i class="fa fa-home home_1"></i></a> / 
				<a href="<?php echo base_url();?>index.php"><span>Hotels & Restaurents</span></a>
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Real estates -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
																					<!-- @ SEARCH -->
			<form method="post" id="search" name="search" action="<?php echo base_url();?>Hotel/search">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city to see local ads</label>
						<select id="city" name="city">	
							<option>Select</option>
							<option>Pune</option>
							<option>Mumbai</option>						
			            </select>
				</div>
				<div class="browse-category ads-list">
					<label>Hotel / lodging</label>
					<select id="type" name="type">
					  <option data-tokens="Rent">Select</option>
					  <option data-tokens="Rent">Hotel</option>
					  <option data-tokens="purchase">lodging</option>
					</select>
				</div>
				<div class="select-city-for-local-ads ads-list">
					<label>Select Price</label>
					<select id="price" name="price">
					  <option value="">Select</option>
					  <option value="0">0 to 10,000</option>
					  <option value="1">10,000 to 50,000</option>
					  <option value="2">50,000 to 1 lakh</option>
					  <option value="3">1 lakh to 50 lakh</option>
					  <option value="4">50 lakh and above</option>
					</select>	
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
							<ul class="list">
							<?php  if($datas==null && $msearch==null){
								foreach ($query as $row)
								{
							?>
								<a href="<?php echo base_url();?>Hotel/manage_view/<?php echo $row->hotelid;?>">
									<?php 
									$hotelid = $row->hotelid;
									$query2 = "SELECT hotel_img.path FROM hotel_img WHERE hotel_img.hotelid = $hotelid LIMIT 1";
									$result2 = $this->db->query($query2);
									$row3 = $result2->row();
									$img_path =  $row3->path;
								?>
									<li>
									<img src="<?php echo base_url();?><?php echo $img_path;?>" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row->title?></h5>
									<span class="adprice">RS. <?php echo $row->price?>/-</span>
									<p class="catpath">Hotels» <?php echo $row->type?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php echo $row->date?></span>
									<span class="cityname"><?php echo $row->city?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php } } elseif ($msearch==null) { 
									foreach ($datas as $row1)
								{?>
								<a href="<?php echo base_url();?>Hotel/manage_view/<?php echo $row1['hotelid'];?>">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row1['title']?></h5>
									<span class="adprice">RS. <?php echo $row1['price']?>/-</span>
									<p class="catpath">Hotels» <?php echo $row1['type']?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php echo $row1['date']?></span>
									<span class="cityname"><?php echo $row1['city']?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php }}else{
									foreach ($msearch as $row2){
								?> 
									<a href="<?php echo base_url();?>realestate/manage_view/<?php echo $row2['hotelid'];?>">
											<li>
											<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
											<section class="list-left">
											<h5 class="title"><?php echo $row2['title'];?></h5>
																		<span class="adprice">RS. <?php echo $row2['price']?>/-</span>
																		<p class="catpath">Real Estate » <?php echo $row2['type']?></p>
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
					<h2 class="sear-head fer">Featured Ads</h2>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="<?php echo base_url();?>assets/images/f1.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 450</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="<?php echo base_url();?>assets/images/f2.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 380</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="<?php echo base_url();?>assets/images/f3.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 560</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- // Real estates -->