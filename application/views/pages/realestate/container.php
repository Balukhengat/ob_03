	<?php 
	/*	$realestate_info = $this->db->select('*')
				->from('realestate')
				->join('real_img', 'realestate.realid = real_img.realid')
				->get()->result_array();
				*/
		$realestate_info=$this->db->get('realestate')->result_array();
	
	?>
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="<?php echo base_url();?>index.php"><i class="fa fa-home home_1"></i></a> / 
			
			<span>Real Estate</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Real estates -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
																					<!-- @ SEARCH -->
			<form method="post" id="search" action="<?php echo base_url();?>index.php/Realestate/search">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city to see local ads</label>
						<select id="city" name="city">	
							<option>Select</option>
							<option>Pune</option>
							<option>Mumbai</option>						
			            </select>
				</div>
				<div class="browse-category ads-list">
					<label>Rent / Purchase</label>
					<select id="type" name="type">
					  <option data-tokens="Rent">Select</option>
					  <option data-tokens="Rent">Rent</option>
					  <option data-tokens="purchase">Purchase</option>
					  <option data-tokens="any">Any</option>
					  
					</select>
				</div>
				<div class="select-city-for-local-ads ads-list">
					<label>Select Price</label>
					<select id="price" name="price">
					  <option value="0">Select</option>
					  <option value="5000">0 to 5000</option>
					  <option value="10000">5000 to 10000</option>
					  <option value="50000">10000 to 50000</option>
					  <option value="100000">50,000 to 1 lakh</option>
					  <option value="500000">1 lakh to 5 lakh</option>
					  <option value="1000000">5 lakh to 10 lakh</option>
					  <option value="5000000">10 lakh to 50 lakh</option>
					  <option value="5000001">50 lakh and above</option>
					</select>	
				</div>
				<div class="search-product ads-list">
					<label>&nbsp;</label>
					<button class="btn btn-block btn-danger">Search</button>
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
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
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
							<?php  if($datas==null){
								foreach ($realestate_info as $row)
								{
							?>
								<a href="<?php echo base_url();?>index.php/realestate/manage_view/<?php echo $row['realid'];?>">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row['title']?></h5>
									<span class="adprice">RS. <?php echo $row['price']?>/-</span>
									<p class="catpath">Real Estate � <?php echo $row['type']?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php echo $row['date']?></span>
									<span class="cityname"><?php echo $row['city']?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php } } else { 
									foreach ($datas as $row1)
								{?>
								<a href="<?php echo base_url();?>index.php/realestate/manage_view/<?php echo $row1['realid'];?>">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row1['title']?></h5>
									<span class="adprice">RS. <?php echo $row1['price']?>/-</span>
									<p class="catpath">Real Estate � <?php echo $row1['type']?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php echo $row1['date']?></span>
									<span class="cityname"><?php echo $row1['city']?></span>
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
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
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
								<?php foreach ($realestate_info as $row)
							{?>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row['title']?></h5>
									<span class="adprice"><?php echo $row['price']?></span>
									<p class="catpath">Real Estate � <?php echo $row['type']?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php echo $row['date']?></span>
									<span class="cityname"><?php echo $row['city']?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php }?>
								
								<div class="clearfix"></div>
								
							</ul>
						</div>
							</div>
						</div>
						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
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