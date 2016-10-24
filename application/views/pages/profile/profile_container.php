<!-- PROFILE CONTAINeR	 -->
		<div class="main-content">
			<div class="w3-categories">
				<div class="container">
					<div class="row">
						 <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<div class="well" id="menuhover"><a href="<?php echo base_url();?>Basic_controller/user_profile">My profile</a></div>
							<div class="well" id="menuhover1"><a href="<?php echo base_url();?>Basic_controller/user_dashboard">Dashboard</a></div>
							<div class="well" id="menuhover2"><a href="<?php echo base_url();?>Basic_controller/user_realestate">RealEstate</a></div>
							<div class="well" id="menuhover3"><a href="<?php echo base_url();?>Basic_controller/user_tution">tution</a></div>
							<div class="well" id="menuhover4"><a href="<?php echo base_url();?>Basic_controller/user_hotel">Hotels and resturents</a></div>
							<div class="well" id="menuhover5"><a href="<?php echo base_url();?>Basic_controller/user_travelling">Travelling</a></div>
							<div class="well" id="menuhover6"><a href="<?php echo base_url();?>Basic_controller/user_automobile">automobile</a></div>		
							<div class="well" id="menuhover7"><a href="<?php echo base_url();?>Basic_controller/user_other">other</a></div>		
						</div>
						<div class="col-xs-9 col-sm-12 col-md-9 col-lg-9">
						 	<?php $this->load->view('pages/profile/'.$pagename)?>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		