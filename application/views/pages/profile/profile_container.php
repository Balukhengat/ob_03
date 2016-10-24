<!-- PROFILE CONTAINeR	 -->
		<div class="main-content">
			<div class="w3-categories">
				<div class="container">
					<div class="row">
						 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="well" id="menuhover"><a href="<?php echo base_url();?>Basic_controller/profile">My profile</a></div>
							<div class="well" id="menuhover1"><a href="<?php echo base_url();?>Basic_controller/dashboard">Dashboard</a></div>
							<div class="well" id="menuhover2"><a href="<?php echo base_url();?>Basic_controller/realestate">RealEstate</a></div>
							<div class="well" id="menuhover3"><a href="<?php echo base_url();?>Basic_controller/tution">tution</a></div>
							<div class="well" id="menuhover4"><a href="<?php echo base_url();?>Basic_controller/hotel">Hotels and resturents</a></div>
							<div class="well" id="menuhover5"><a href="<?php echo base_url();?>Basic_controller/travelling">Travelling</a></div>
							<div class="well" id="menuhover6"><a href="<?php echo base_url();?>Basic_controller/automobile">automobile</a></div>		
							<div class="well" id="menuhover7"><a href="<?php echo base_url();?>Basic_controller/other">other</a></div>		
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						 	<?php $this->load->view('pages/profile/'.$pagename)?>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		