<?php
date_default_timezone_set('Asia/Kolkata');
	$realestate_latest = $this->db->query("SELECT * FROM realestate INNER JOIN real_img ON realestate.realid = real_img.realid ORDER BY date DESC LIMIT 4");
	$automobile_latest = $this->db->query("SELECT * FROM automobile INNER JOIN automobile_img ON automobile.autoid = automobile_img.autoid ORDER BY date DESC LIMIT 4");
	$hotel_latest = $this->db->query("SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid ORDER BY date DESC LIMIT 4");
	$travelling_latest = $this->db->query("SELECT * FROM travelling INNER JOIN travelling_img ON travelling.travelid = travelling_img.travelid ORDER BY date DESC LIMIT 4");
	$tution_latest = $this->db->query("SELECT * FROM tution INNER JOIN tut_img ON tution.tutid = tut_img.tutid ORDER BY date DESC LIMIT 4");
	//$other_latest = $this->db->query("SELECT * FROM other INNER JOIN other_img ON other.otherid = other_img.otherid ORDER BY date DESC LIMIT 4");
?>
<!-- content-starts-here -->
		<div class="main-content">
			<div class="w3-categories">
				<h3><i class="fa fa-tags" aria-hidden="true"></i> Latest Post <i class="fa fa-tags" aria-hidden="true"></i></h3>
				<div class="container">
					<div class="agile-trend-ads">
							<ul id="flexiselDemo3">
								<li>
								<?php 
									//realestate
									foreach ($realestate_latest->result_array() as $row){
										$realid = $row['realid'];
								?>
										<a href="<?php echo base_url();?>index.php/Realestate/manage_view/<?php echo $row['realid'];?>">
											<div class="col-md-3 col-sm-3 col-xs-6">
												<img src="<?php echo base_url().$row['path'];?>" class="img-responsive" alt="<?php echo $row['title'];?>"/>
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
										$tutid = $row['tutid'];
								?>
										<a href="<?php echo base_url();?>index.php/tutions/manage_view/<?php echo $row['tutid'];?>">
											<div class="col-md-3 col-sm-3 col-xs-6">
												<img src="<?php echo base_url();echo $row['path']?>" class="img-responsive" alt="<?php echo $row['title'];?>"/>
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
									//Hotel
									foreach ($hotel_latest->result_array() as $row){
										$hotelid = $row['hotelid'];
								?>
										<a href="<?php echo base_url();?>index.php/Hotel/manage_view/<?php echo $row['hotelid'];?>">
											<div class="col-md-3 col-sm-3 col-xs-6">
												<img src="<?php echo base_url();echo $row['path']?>" class="img-responsive" alt="<?php echo $row['title'];?>"/>
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
										$travelid = $row['travelid'];
								?>
										<a href="<?php echo base_url();?>index.php/Travelling/manage_view/<?php echo $row['travelid'];?>">
											<div class="col-md-3 col-sm-3 col-xs-6">
												<img src="<?php echo base_url();echo $row['path']?>" class="img-responsive" alt="<?php echo $row['title'];?>"/>
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
									//Automobile
									foreach ($automobile_latest->result_array() as $row){
										$autoid = $row['autoid'];
								?>
										<a href="<?php echo base_url();?>index.php/Automobile/manage_view/<?php echo $row['autoid'];?>">
											<div class="col-md-3 col-sm-3 col-xs-6">
												<img src="<?php echo base_url();echo $row['path']?>" class="img-responsive" alt="<?php echo $row['title'];?>"/>
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
								<?php 
									//OTHER
 								?>	
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
				 <?php 
				 	$mostpopular = "SELECT * from pramotion";
				 	$mostpopular_result = $this->db->query($mostpopular);
				 	foreach ($mostpopular_result->result_array() as $mostpopular_row){
				 		$post_id = $mostpopular_row['post_id'];
				 		$category = $mostpopular_row['category'];
				 		if($category == 0){
				 			$real_id = $post_id;
				 			$cat_id = "realid";
				 			$cat_table = "realestate";
				 			$cat_img_table = "real_img";
				 		}elseif($category==1){
				 			$real_id = $post_id;
				 			$cat_id = "tutid";
				 			$cat_table = "tution";
				 			$cat_img_table = "tut_img";
				 		}elseif($category == 2){
				 			$real_id = $post_id;
				 			$cat_id = "hotelid";
				 			$cat_table = "hotel";
				 			$cat_img_table = "hotel_img";
				 		}elseif($category == 3){
				 			$real_id = $post_id;
				 			$cat_id = "travelid";
				 			$cat_table = "travelling";
				 			$cat_img_table = "travelling_img";
				 		}elseif($category == 4){
				 			$real_id = $post_id;
				 			$cat_id = "autoid";
				 			$cat_table = "automobile";
				 			$cat_img_table = "automobile_img";
				 		}elseif($category == 5){
				 			$real_id = $post_id;
				 			$cat_id = "otherid";
				 			$cat_table = "other";
				 			$cat_img_table = "other_img";
				 		}
				 			$fetchmostpopular = "SELECT $cat_table.$cat_id, $cat_table.`name`, $cat_table.title, $cat_table.description,  $cat_table.userid, $cat_table.visits, $cat_img_table.path FROM $cat_img_table INNER JOIN $cat_table ON $cat_table.$cat_id = $cat_img_table.$cat_id WHERE $cat_table.$cat_id = $real_id LIMIT 1";
				 			$fetchmostpopular_result = $this->db->query($fetchmostpopular);
				 			foreach ($fetchmostpopular_result->result_array() as $fetchmostpopular_row){
				 			?>
				 			<div class="col-md-4 w3ls-portfolio-left">
								<div class="portfolio-img event-img">
									 <img src="<?php echo $fetchmostpopular_row['path'];?>" class="img-responsive" alt="<?php echo $fetchmostpopular_row['title'];?>" height="250" width="350"/>
									 <div class="over-image"></div>
								</div>
								<div class="portfolio-description">
								   <h4><a href="<?php echo base_url();?>index.php/Realestate/manage_view/<?php echo $fetchmostpopular_row[$cat_id];?>"><?php echo $fetchmostpopular_row['title'];?></a></h4>
								   <p><?php echo $fetchmostpopular_row['description'];?></p>
									<a href="<?php echo base_url();?>index.php/Realestate/manage_view/<?php echo $fetchmostpopular_row[$cat_id];?>">
										<span>Explore</span>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
				 			<?php 
				 			}
				 		
				 		
				 	}//Eof foreach	
				 ?>
					<div class="clearfix"> </div>
				 </div>
				 
				 <!-- ADVERTISEMENT BANNER -->
					
				<!-- 	<div style="padding-top: 40px;">
						<img class="img-responsive" style="margin-left: auto;margin-right: auto;" alt="adds" src="<?php echo base_url();?>assets/images/adbanner.jpg" width="800" height="60">
 					</div> -->	
			 </div>
			<!-- trending-ads -->									
			<div class="trending-ads">
				<div class="container">
				<div class="agile-trend-ads">
					<h2><i class="fa fa-line-chart" aria-hidden="true"></i> Some more <i class="fa fa-line-chart" aria-hidden="true"></i></h2>
						<ul id="realestate">
							<li>
							<?php $random_post_realestate = $this->db->query("SELECT realestate.realid, realestate.`name`, realestate.title, realestate.type, realestate.address, realestate.builtup, realestate.price, realestate.description, realestate.mobile, realestate.email, realestate.amenities, realestate.city, realestate.area, realestate.date, realestate.offerend, realestate.category, realestate.userid, real_img.path, real_img.id FROM realestate INNER JOIN real_img ON realestate.realid = real_img.realid GROUP BY realid ORDER BY RAND() LIMIT 4");?>
							<?php foreach ($random_post_realestate->result() as $random_realestate){?>
								<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
									<a href="<?php echo base_url();?>index.php/Realestate/manage_view/<?php echo $random_realestate->realid;?>">
										<img src="<?php echo base_url();echo $random_realestate->path;?>" alt="<?php echo $random_realestate->title;?>" />
									</a> 
									<div class="w3-ad-info">
										<h5><?php echo $random_realestate->title;?></h5>
										<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
									</div>
								</div>
							<?php }?>
							</li>
						</ul>
				</div>
			</div>
			<div class="container">
				<div class="agile-trend-ads">
						<ul id="tution">
							<li>
							<?php $random_post_tution = $this->db->query("SELECT * FROM tution INNER JOIN tut_img ON tution.tutid = tut_img.tutid GROUP BY tution.tutid ORDER BY RAND() LIMIT 4");?>
							<?php foreach ($random_post_tution->result() as $random_tution){?>
								<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
									<a href="<?php echo base_url();?>index.php/tutions/manage_view/<?php echo $random_tution->tutid;?>">
										<img src="<?php echo base_url();echo $random_tution->path;?>" alt="<?php echo $random_tution->title;?>" />
									</a> 
									<div class="w3-ad-info">
										<h5><?php echo $random_tution->title;?></h5>
										<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
									</div>
								</div>
							<?php }?>
							</li>
						</ul>
				</div>
			</div>
			<div class="container">
				<div class="agile-trend-ads">
						<ul id="hotel">
							<li>
							<?php $random_post_hotel = $this->db->query("SELECT * FROM hotel INNER JOIN hotel_img ON hotel.hotelid = hotel_img.hotelid GROUP BY hotel.hotelid ORDER BY RAND() LIMIT 4");?>
							<?php foreach ($random_post_hotel->result() as $random_hotel){?>
								<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
									<a href="<?php echo base_url();?>index.php/Hotel/manage_view/<?php echo $random_hotel->hotelid;?>">
										<img src="<?php echo base_url();echo $random_hotel->path;?>" alt="<?php echo $random_hotel->title;?>" />
									</a> 
									<div class="w3-ad-info">
										<h5><?php echo $random_hotel->title;?></h5>
										<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
									</div>
								</div>
							<?php }?>
							</li>
						</ul>
				</div>
			</div>
			<div class="container">
				<div class="agile-trend-ads">
						<ul id="travelling">
							<li>
							<?php $random_post_travelling = $this->db->query("SELECT * FROM travelling INNER JOIN travelling_img ON travelling.travelid = travelling_img.travelid GROUP BY travelling.travelid ORDER BY RAND() LIMIT 4");?>
							<?php foreach ($random_post_travelling->result() as $random_travelling){?>
								<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
									<a href="<?php echo base_url();?>index.php/Travelling/manage_view/<?php echo $random_travelling->travelid;?>">
										<img src="<?php echo base_url();echo $random_travelling->path;?>" alt="<?php echo $random_travelling->title;?>" />
									</a> 
									<div class="w3-ad-info">
										<h5><?php echo $random_travelling->title;?></h5>
										<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
									</div>
								</div>
							<?php }?>
							</li>
						</ul>
				</div>
			</div>
			<div class="container">
				<div class="agile-trend-ads">
						<ul id="automoblie">
							<li>
							<?php $random_post_automobile = $this->db->query("SELECT * FROM automobile INNER JOIN automobile_img ON automobile.autoid = automobile_img.autoid GROUP BY automobile.autoid ORDER BY RAND() LIMIT 4");?>
							<?php foreach ($random_post_automobile->result() as $random_automobile){?>
								<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
									<a href="<?php echo base_url();?>index.php/Automobile/manage_view/<?php echo $random_automobile->autoid;?>">
										<img src="<?php echo base_url();echo $random_automobile->path;?>" alt="<?php echo $random_automobile->title;?>" />
									</a> 
									<div class="w3-ad-info">
										<h5><?php echo $random_automobile->title;?></h5>
										<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
									</div>
								</div>
							<?php }?>
							</li>
						</ul>
				</div>
			</div>
			<div class="container">
				<div class="agile-trend-ads">
						<ul id="automoblie">
							<li>
							<?php $random_post_other = $this->db->query("SELECT * FROM other INNER JOIN other_img ON other.otherid = other_img.otherid GROUP BY other.otherid ORDER BY RAND() LIMIT 4");?>
							<?php foreach ($random_post_other->result() as $random_other){?>
								<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
									<a href="<?php echo base_url();?>index.php/Other/manage_view/<?php echo $random_other->otherid;?>">
										<img src="<?php echo base_url();echo $random_other->path;?>" alt="<?php echo $random_other->title;?>" />
									</a> 
									<div class="w3-ad-info">
										<h5><?php echo $random_other->title;?></h5>
										<span><?php $date = $row['date'];echo time_elapsed_string($date);?></span>
									</div>
								</div>
							<?php }?>
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
							<li style="padding-left: 0px; padding-right: 0px;"><a href="#"><img class="img-responsive" src="assets/images/ruchi_banquets.jpg" alt="Ruchi Banquets"></a></li>
						</ul>	
					</div>
				</div>	
		<!--//partners-->	
		<!-- mobile app -->
			<div class="agile-info-mobile-app">
				<div class="container">
					<div class="col-md-5 w3-app-left">
						<a href=""><img src="assets/images/app.png" alt=""></a>
					</div>
					<div class="col-md-7 w3-app-right">
						<h3>Offers BUll</h3><h3><span>WE PROVIDE YOU THE BEST DEAL HIGH QUALITY SERVICE. OUR AIM IS YOUR COMPLETE SATISFACTION.</span></h3>
						<p></p><div class="agileits-dwld-app">
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