<?php 
	$realestate_latest = $this->db->query("SELECT * from realestate ORDER BY date DESC LIMIT 4");
	$automobile_latest = $this->db->query("SELECT * from automobile ORDER BY date DESC LIMIT 4");
	$hotel_latest = $this->db->query("SELECT * from hotel ORDER BY date DESC LIMIT 4");
	$travelling_latest = $this->db->query("SELECT * from travelling ORDER BY date DESC LIMIT 4");
	$tution_latest = $this->db->query("SELECT * from tution ORDER BY date DESC LIMIT 4");
	$other_latest = $this->db->query("SELECT * from other ORDER BY date DESC LIMIT 4");
?>
<!-- content-starts-here -->
		<div class="main-content">
			<div class="w3-categories">
				<h3><i class="fa fa-tags" aria-hidden="true"></i> Recent Offers <i class="fa fa-tags" aria-hidden="true"></i></h3>
				<div class="container">
					<div class="agile-trend-ads">
							<ul id="flexiselDemo3">
								<li>
								<?php 
									//realestate
									foreach ($realestate_latest->result_array() as $row){
								?>
							<a href="<?php echo base_url();?>Realestate/manage_view/<?php echo $row['realid'];?>">
									<div class="col-md-3 col-sm-3 col-xs-6">
											<img src="assets/images/r4.jpg" alt="" />
										<div class="w3-ad-info">
											<h5><?php echo $row['title']?></h5>
											<h5><?php echo $row['name']?></h5>
											<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
										</div>
									</div>
									</a>
								<?php 
									}
								?>	
								</li>
								<li>
								<?php 
									//automobile
									foreach ($automobile_latest->result_array() as $row){
								?>
						<a href="<?php echo base_url();?>Automobile/manage_view/<?php echo $row['autoid'];?>">
								
									<div class="col-md-3 col-sm-3 col-xs-6">
											<img src="assets/images/c6.jpg" alt="" />
										<div class="w3-ad-info">
											<h5><?php echo $row['title']?></h5>
											<h5><?php echo $row['name']?></h5>
											<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
										</div>
									</div>
									</a>
								<?php 
									}
								?>	
								</li>
								<li>
								
								<?php 
									//hotel
									foreach ($hotel_latest->result_array() as $row){
								?>
								<a href="<?php echo base_url();?>Hotel/manage_view/<?php echo $row['hotelid'];?>">
								
									<div class="col-md-3 col-sm-3 col-xs-6">
											<img src="assets/images/ad2.jpg" alt="" />
										<div class="w3-ad-info">
											<h5><?php echo $row['title']?></h5>
											<h5><?php echo $row['name']?></h5>
											<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
											
										</div>
									</div>
									</a>
								<?php 
									}
								?>	
								</li>
								<li>
								
								<?php 
									//Travelling
									foreach ($travelling_latest->result_array() as $row){
								?>
						<a href="<?php echo base_url();?>Travelling/manage_view/<?php echo $row['travelid'];?>">
								
									<div class="col-md-3 col-sm-3 col-xs-6">
											<img src="assets/images/ad2.jpg" alt="" />
										<div class="w3-ad-info">
											<h5><?php echo $row['title']?></h5>
											<h5><?php echo $row['name']?></h5>
											<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
											
										</div>
									</div>
									</a>
								<?php 
									}
								?>	
								</li>
								<li>
								
								<?php 
									//Tution
									foreach ($tution_latest->result_array() as $row){
								?>
								<a href="<?php echo base_url();?>Tutions/manage_view/<?php echo $row['tutid'];?>">
									<div class="col-md-3 col-sm-3 col-xs-6">
											<img src="assets/images/ad2.jpg" alt="" />
										<div class="w3-ad-info">
											<h5><?php echo $row['title']?></h5>
											<h5><?php echo $row['name']?></h5>
											<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
											
										</div>
									</div>
									</a>
								<?php 
									}
								?>	
								</li>
								<li>
								
								<?php 
									//Other
									foreach ($other_latest->result_array() as $row){
								?>
									<div class="col-md-3 col-sm-3 col-xs-6">
											<img src="assets/images/ad2.jpg" alt="" />
										<div class="w3-ad-info">
											<h5><?php echo $row['title']?></h5>
											<h5><?php echo $row['name']?></h5>
											<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
											
										</div>
									</div>
								<?php 
									}
								?>	
								</li>
						</ul>
					</div>
					
					<!-- ADVERTISEMENT BANNER -->
					<!-- 
					//
					//	PLACE ADSENCE HERE
					//
					<div style="padding-top: 40px;">
						<img class="img-responsive" style="margin-left: auto;margin-right: auto;" alt="adds" src="<?php echo base_url();?>assets/images/adbanner.jpg" width="800" height="60">
					</div>	
					 -->
					
				</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- most-popular-ads -->
			<div class="w3l-popular-ads">  
				<h3><i class="fa fa-diamond" aria-hidden="true"></i> Most popular <i class="fa fa-diamond" aria-hidden="true"></i></h3>
				 <div class="w3l-popular-ads-info">
					<div class="col-md-4 w3ls-portfolio-left">
						<div class="portfolio-img event-img">
							<img src="assets/images/da1.jpg" class="img-responsive" alt=""/>
							 <div class="over-image"></div>
						</div>
						<div class="portfolio-description">
						   <h4><a href="jobs.html">BPO jobs</a></h4>
						   <p>Suspendisse placerat mattis arcu nec por</p>
							<a href="jobs.html">
								<span>Explore</span>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>	<div class="col-md-4 w3ls-portfolio-left">
						<div class="portfolio-img event-img">
							<img src="assets/images/da1.jpg" class="img-responsive" alt=""/>
							 <div class="over-image"></div>
						</div>
						<div class="portfolio-description">
						   <h4><a href="real-estate.html">Apartments for Sale</a></h4>
						   <p>Suspendisse placerat mattis arcu nec por</p>
							<a href="real-estate.html">
								<span>Explore</span>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls-portfolio-left">
						<div class="portfolio-img event-img">
							<img src="assets/images/da1.jpg" class="img-responsive" alt=""/>
							 <div class="over-image"></div>
						</div>
						<div class="portfolio-description">
						   <h4><a href="jobs.html">BPO jobs</a></h4>
						   <p>Suspendisse placerat mattis arcu nec por</p>
							<a href="jobs.html">
								<span>Explore</span>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls-portfolio-left">
						<div class="portfolio-img event-img">
							<img src="assets/images/da1.jpg" class="img-responsive" alt=""/>
							 <div class="over-image"></div>
						</div>
						<div class="portfolio-description">
						   <h4><a href="electronics-appliances.html">Accessories</a></h4>
						   <p>Suspendisse placerat mattis arcu nec por</p>
							<a href="electronics-appliances.html">
								<span>Explore</span>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls-portfolio-left">
						<div class="portfolio-img event-img">
							<img src="assets/images/da1.jpg" class="img-responsive" alt=""/>
							 <div class="over-image"></div>
						</div>
						<div class="portfolio-description">
						   <h4><a href="furnitures.html">Home Appliances</a></h4>
						   <p>Suspendisse placerat mattis arcu nec por</p>
							<a href="furnitures.html">
								<span>Explore</span>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls-portfolio-left">
						<div class="portfolio-img event-img">
							<img src="assets/images/da1.jpg" class="img-responsive" alt=""/>
							 <div class="over-image"></div>
						</div>
						<div class="portfolio-description">
						   <h4><a href="fashion.html">Clothing</a></h4>
						   <p>Suspendisse placerat mattis arcu nec por</p>
							<a href="fashion.html">
								<span>Explore</span>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				 </div>
				 
				 <!-- ADVERTISEMENT BANNER -->
					
					<div style="padding-top: 40px;">
						<img class="img-responsive" style="margin-left: auto;margin-right: auto;" alt="adds" src="<?php echo base_url();?>assets/images/adbanner.jpg" width="800" height="60">
					</div>	
			 </div>
			<!-- trending-ads -->									
			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="agile-trend-ads">
					<h2><i class="fa fa-line-chart" aria-hidden="true"></i> Trending <i class="fa fa-line-chart" aria-hidden="true"></i></h2>
							<ul id="">
								<li>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<a href="single.html">
											<img src="assets/images/p1.jpg" alt="" />
											<span class="price">&#36; 450</span>
										</a> 
										<div class="w3-ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<a href="single.html">
											<img src="assets/images/p2.jpg" alt="" />
											<span class="price">&#36; 399</span>
										</a> 
										<div class="w3-ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<a href="single.html">
											<img src="assets/images/p3.jpg" alt="" />
											<span class="price">&#36; 199</span>
										</a> 
										<div class="w3-ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>8 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<a href="single.html">
											<img src="assets/images/p4.jpg" alt="" />
											<span class="price">&#36; 159</span>
										</a> 
										<div class="w3-ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>19 hour ago</span>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<a href="single.html">
											<img src="assets/images/p5.jpg" alt="" />
											<span class="price">&#36; 1599</span>
										</a> 
										<div class="w3-ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<a href="single.html">
											<img src="assets/images/p6.jpg" alt="" />
											<span class="price">&#36; 1099</span>
										</a> 
										<div class="w3-ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<a href="single.html">
											<img src="assets/images/p7.jpg" alt="" />
											<span class="price">&#36; 109</span>
										</a> 
										<div class="w3-ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<a href="single.html">
											<img src="assets/images/p8.jpg" alt="" />
											<span class="price">&#36; 189</span>
										</a> 
										<div class="w3-ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
								</li>
						</ul>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
			<!--partners-->
			<div class="w3layouts-partners">
				<h3><i class="fa fa-briefcase" aria-hidden="true"></i> OUR CLIENTS <i class="fa fa-briefcase" aria-hidden="true"></i></h3>
					<div class="container">
						<ul>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-1.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-2.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-3.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-4.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-5.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-6.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-7.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-8.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-9.png" alt=""></a></li>
							<li><a href="#"><img class="img-responsive" src="assets/images/p-10.png" alt=""></a></li>	
					</div>
				</div>	
		<!--//partners-->	
		<!-- mobile app -->
			<div class="agile-info-mobile-app">
				<div class="container">
					<div class="col-md-5 w3-app-left">
						<a href="mobileapp.html"><img src="assets/images/app.png" alt=""></a>
					</div>
					<div class="col-md-7 w3-app-right">
						<h3>Offers BUll</h3><h3><span>WE PROVIDE YOU THE BEST DEAL HIGH QUALITY SERVICE. OUR AIM IS YOUR COMPLETE SATISFACTION.</span></h3>
						<p>add text</p><div class="agileits-dwld-app">
							<h6>Download The App : 
								<a href="#"><i class="fa fa-android"></i></a><p>Coming Soon...</p>
							</h6>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //mobile app -->
		<?php 
		function time_elapsed_string($datetime, $full = false) {
			date_default_timezone_set('Asia/Kolkata');
			$now = new DateTime;
			$ago = new DateTime($datetime);
			$diff = $now->diff($ago);
		
			$diff->w = floor($diff->d / 7);
			$diff->d -= $diff->w * 7;
		
			$string = array(
					'y' => 'year',
					'm' => 'month',
					'w' => 'week',
					'd' => 'day',
					'h' => 'hour',
					'i' => 'minute',
					's' => 'second',
			);
			foreach ($string as $k => &$v) {
				if ($diff->$k) {
					$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
				} else {
					unset($string[$k]);
				}
			}
		
			if (!$full) $string = array_slice($string, 0, 1);
			return $string ? implode(', ', $string) . ' ago' : 'just now';
		}
		?>