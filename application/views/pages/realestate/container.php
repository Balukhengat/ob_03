	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="index.html"><i class="fa fa-home home_1"></i></a> / 
			<a href="categories.html">Categories</a> / 
			<span>Real Estate</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Real estates -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city to see local ads</label>
						<select>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Entire USA</option>
													<option>Birmingham</option>
													<option>Anchorage</option>
													<option>Phoenix</option>
													<option>Little Rock</option>
													<option>Los Angeles</option>
													<option>Denver</option>
													<option>Bridgeport</option>
													<option>Wilmington</option>
													<option>Jacksonville</option>
													<option>Atlanta</option>
													<option>Honolulu</option>
													<option>Boise</option>
													<option>Chicago</option>
													<option>Indianapolis</option>
												</optgroup>
			            </select>
				</div>
				<div class="browse-category ads-list">
					<label>Browse Categories</label>
					<select class="selectpicker show-tick" data-live-search="true">
					  <option data-tokens="Real Estate">Real Estate</option>
					  <option data-tokens="Mobiles">Mobiles</option>
					  <option data-tokens="Electronics & Appliances">Electronics & Appliances</option>
					  <option data-tokens="Cars">Cars</option>
					  <option data-tokens="Bikes">Bikes</option>
					  <option data-tokens="Furniture">Furniture</option>
					  <option data-tokens="Pets">Pets</option>
					  <option data-tokens="Books, Sports & Hobbies">Books, Sports & Hobbies</option>
					  <option data-tokens="Fashion">Fashion</option>
					  <option data-tokens="Kids">Kids</option>
					  <option data-tokens="Services">Services</option>
					  <option data-tokens="Jobs">Jobs</option>
					</select>
				</div>
				<div class="search-product ads-list">
					<label>Search for a specific product</label>
					<div class="search">
						<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class="form-control input-lg" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</div>
					</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="ads-grid">
				<div class="side-bar col-md-3">
					<div class="search-hotel">
					<h3 class="agileits-sear-head">Name contains</h3>
					<form>
						<input type="text" value="Product name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
							<ul class="dropdown-menu6">
								<li>
									                
									<div id="slider-range"></div>							
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>			
							</ul>
							<!---->
							<script type="text/javascript" src="js/jquery-ui.js"></script>
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 50, 6000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
							
				</div>
				<div class="w3-brand-select">
					<h3 class="agileits-sear-head">Category</h3>
					  <select class="selectpicker" data-live-search="">
					  <option data-tokens="All">All</option>
					  <option data-tokens="Rent">Rent</option>
					  <option data-tokens="Sale">Sale</option>
					</select>
				</div>
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
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Ads</span>
						  </a>
						</li>
						<li role="presentation" class="next">
						  <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
							<span class="text">Ads with Photos</span>
						  </a>
						</li>
					  </ul>
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
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">It is a long established fact that a reader</h5>
									<span class="adprice">$310</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r3.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
									<span class="adprice">$190</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:30</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r4.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
									<span class="adprice">$480</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:25</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r5.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
									<span class="adprice">$859</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:24</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r6.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
									<span class="adprice">$1299</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:22</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
									<span class="adprice">$1099</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:21</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r7.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:20</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r8.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$899</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:05</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r9.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et qua</h5>
									<span class="adprice">$199</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:04</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r10.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$250</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r11.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
									<span class="adprice">$189</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="<?php echo base_url();?>assets/images/r12.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
									<span class="adprice">$1090</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r13.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">looked up one of the more obscure Latin words</h5>
									<span class="adprice">$599</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:02</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								<div class="clearfix"></div>
								</a>
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
								<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">It is a long established fact that a reader</h5>
									<span class="adprice">$310</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r3.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
									<span class="adprice">$190</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:30</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r4.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
									<span class="adprice">$480</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:25</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r5.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
									<span class="adprice">$859</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:24</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r6.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
									<span class="adprice">$1299</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:22</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
									<span class="adprice">$1099</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:21</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r7.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:20</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r8.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$899</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:05</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r9.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et qua</h5>
									<span class="adprice">$199</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:04</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r10.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$250</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r11.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
									<span class="adprice">$189</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r12.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
									<span class="adprice">$1090</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r13.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">looked up one of the more obscure Latin words</h5>
									<span class="adprice">$599</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:02</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								<div class="clearfix"></div>
								</a>
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
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Real estates -->