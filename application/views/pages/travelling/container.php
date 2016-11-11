	<?php
//pagination per page 5 and segment
	if($datas==null){
		$query= $this->db->get('travelling',5,$this->uri->segment(3));
	}
	
	?>
	<?php $this->load->view('layout/category.php');?>
	<!-- breadcrumbs -->
	
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
				<a href="<?php echo base_url();?>index.php"><i class="fa fa-home home_1"></i></a> / 
				<a href="<?php echo base_url();?>index.php"><span>Travelling</span></a>
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Travelling -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
																					<!-- @ SEARCH -->
			<form method="post" id="search" name="search" action="<?php echo base_url();?>Travelling/search">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city to pick up</label>
						<select id="city" name="city">	
							<option>Select</option>
							<option>Pune</option>
							<option>Mumbai</option>						
			            </select>
				</div>
				<div class="browse-category ads-list">
					<label>TO</label>
					<select id="type" name="type">
					  <option data-tokens="Rent">Select</option>
					  <option data-tokens="Rent">Pune</option>
					  <option data-tokens="purchase">Mumbai</option>
					</select>
				</div>
				<div class="search-product ads-list">
					<label>&nbsp;</label>
					<button name="submit" class="btn btn-block btn-danger">Search</button>
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
			<?php if($this->session->flashdata('message')!=null){?>
			 <div class="col-md-9">
		<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
	</div>	 <?php }?>
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
										<select id="sort" name="sort">
														<option value="AES">Price: Rs Low to High</option>
														<option value="DESC">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul id="result" class="list">
							<?php  if($datas==null){
								foreach ($query->result() as $row)
								{
							?>
								<a href="<?php echo base_url();?>Travelling/manage_view/<?php echo $row->travelid;?>">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5  class="title"><?php echo $row->title?></h5>
									<span  class="adprice">RS.<?php echo $row->price?>/-</span>
									<p  class="catpath">Travelling» <?php echo $row->name?></p>
									</section>
									<section class="list-right">
									<span  class="date"><?php echo $row->date?></span>
									<span  class="cityname"><?php echo $row->city?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php } } else { 
									foreach ($datas as $row1)
								{?>
								<a href="<?php echo base_url();?>Travelling/manage_view/<?php echo $row1['travelid'];?>">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row->title?></h5>
									<span  class="adprice">RS.<?php echo $row->price?>/-</span>
									<p  class="catpath">Travelling» <?php echo $row->name?></p>
									</section>
									<section class="list-right">
									<span  class="date"><?php echo $row->date?></span>
									<span  class="cityname"><?php echo $row->city?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php }}?> 
								
							</ul>
							<ul id="result1" class="list">
							<a href="<?php echo base_url();?>Travelling/manage_view/<?php echo $row->travelid;?>">
									<li>
									<img src="<?php echo base_url();?>assets/images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 id="title" class="title"></h5>
									<span id="price" class="adprice">RS./-</span>
									<p id="name" class="catpath">Travelling»</p>
									</section>
									<section class="list-right">
									<span id="date" class="date"></span>
									<span id="city" class="cityname"></span>
									</section>
									<div id="data" class="clearfix"></div>
									</li> 
								</a>
							</ul>
						</div>
						</div>
						</div>
						
						<div class="pagination pagination-sm ">
							<?php if($datas==null){ echo $this->pagination->create_links();}?>
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
	<!-- // travelling -->
	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript">
$(function(){
	jQuery("#result1").hide();
	$("#sort").change(function(){
		var val=$("#sort").val();
		var url="<?php echo base_url();?>"+"Travelling/sort/"+val;
		alert(url);
		 $.ajax({
	        	method:"POST",
	        	url:url,
	        	data:{val:val},
	        	success:function(response)
	        	{
	        		if(response!=null)
	        		{
	        				jQuery("#result").hide();
		        			jQuery("#result1").show();
		        			jQuery("#title").html(response.title);
		        			jQuery("#price").html(response.price);
		        			jQuery("#name").html(response.name);
		        			jQuery("#date").html(response.date);
		        			jQuery("#city").html(response.city);
		        		alert(response);
	        		}
	        		else
	        		{
	        			alert(title);
	        		}
	        	}	
	        });
	});
 });
</script>