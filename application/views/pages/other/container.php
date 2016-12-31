		<?php
		$query=array();
//pagination per page 5 and segment
	if($datas==null && $msearch==null){
		$query= $this->db->get('other',5,$this->uri->segment(3))->result();
	}	
	?>
	<?php $this->load->view('layout/category.php');?>
	<!-- breadcrumbs -->
	
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
				<a href="<?php echo base_url();?>index.php"><i class="fa fa-home home_1"></i></a> / 
				<a href="<?php echo base_url();?>index.php"><span>Other</span></a>
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Real estates -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
																					<!-- @ SEARCH -->
			<form method="post" id="search" name="search" action="<?php echo base_url();?>Other/search">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city</label>
						<input type="text" id="city" name="city" />
				</div>
				<div class="browse-category ads-list">
					<label>Your Product</label>
					<input type="text" id="type" name="type" />
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
								<a href="<?php echo base_url();?>other/manage_view/<?php echo $row->otherid;?>">
									<?php 
									$otherid = $row->otherid;
									$query2 = "SELECT other_img.path FROM other_img WHERE other_img.otherid = $otherid LIMIT 1";
									$result2 = $this->db->query($query2);
									$row3 = $result2->row();
									$img_path =  $row3->path;
									?>
									<li>
									<img src="<?php echo base_url();?><?php echo $img_path;?>" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row->title?></h5>
									<span class="adprice"><?php echo $row->name?></span>
									<p class="catpath">Other » <?php echo $row->mobile?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php $date =  strtotime($row->date); echo $date = date('F d, Y',$date);?></span>
									<span class="cityname"><?php echo $row->city?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php } } elseif ($msearch==null)  { 
									foreach ($datas as $row1)
								{?>
								<a href="<?php echo base_url();?>other/manage_view/<?php echo $row1['otherid'];?>">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row1['title']?></h5>
									<span class="adprice"><?php echo $row1['name']?></span>
									<p class="catpath">Other » <?php echo $row1['mobile']?></p>
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
									<a href="<?php echo base_url();?>other/manage_view/<?php echo $row2['otherid'];?>">
											<li>
											<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
											<section class="list-left">
											<h5 class="title"><?php echo $row2['title'];?></h5>
																		<span class="adprice"><?php echo $row2['name']?></span>
																		<p class="catpath">Other » <?php echo $row2['mobile']?></p>
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
							<?php if($query==null){ echo $this->pagination->create_links();}?>
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
	<!-- // Real estates -->